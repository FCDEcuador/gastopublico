<?php

namespace BlaudCMS\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use BlaudCMS\Http\Controllers\Controller;


use BlaudCMS\Configuration;
use BlaudCMS\Menu;
use BlaudCMS\MenuItem;
use BlaudCMS\Catalogue;
use BlaudCMS\ContentCategory;
use BlaudCMS\ContentArticle;
use BlaudCMS\Indicator;
use BlaudCMS\MetaTag;

use SEOMeta;
use OpenGraph;
use Twitter;
use SEO;

use Storage;
use Auth;


/**
* Clase para mostrar el home del sitio web
* @Autor Raúl Chauvin
* @FechaCreacion  2019/02/16
*/

class HomeController extends Controller
{
    /**
     * Disco de storage.
     *
     * @var sStorageDisk
     */
    protected $sStorageDisk;

    /**
     * Instancia de storage.
     *
     * @var oStorage
     */
    protected $oStorage;

	/**
     * Instancia del modelo.
     *
     * @var Configuration
     */
    private $oConfiguration;

    /**
     * Constructor del Controller, iniciamos los middlewares para validar que el usuario tenga los permisos correctos
     * @Autor Raúl Chauvin
     * @FechaCreacion  2017/05/15
     */
    public function __construct(){
    	
    	// Instanciamos el objeto de configuracion para obtener su data, si no existe creamos un nuevo objeto
        
        $oConfiguration = Configuration::find(1);
        if( ! is_object($oConfiguration)){
            $oConfiguration = new Configuration;
            $oConfiguration->id = 1;
            $oConfiguration->save();
        }
        $this->oConfiguration = $oConfiguration;

        $this->sStorageDisk = 'public';
        $this->oStorage = Storage::disk($this->sStorageDisk);
        
    }


    /**
     * Metodo para mostrar el home del sitio
     * @Autor Raúl Chauvin
     * @FechaCreacion  2019/02/16
     *
     * @route /
     * @method GET
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request){

        
        $aMetas = MetaTag::all();
        $title = $this->oConfiguration->title_website ? $this->oConfiguration->title_website : 'Gasto Publico';
        SEO::setTitle($title);

        if($aMetas->isNotEmpty()){
            foreach($aMetas as $metaTag){
                if($metaTag->name == 'description'){
                    SEO::setDescription($metaTag->value);
                }elseif($metaTag->name == 'keywords'){
                    SEOMeta::addKeyword(explode(',', $metaTag->value));
                }else{
                    SEOMeta::addMeta($metaTag->name, $metaTag->value, $metaTag->type);
                }
            }
        }

        // SEO::opengraph()->setUrl('http://current.url.com');
        // SEO::setCanonical('https://codecasts.com.br/lesson');
        //  SEO::opengraph()->addProperty('type', 'articles');
        // SEO::twitter()->setSite('@LuizVinicius73');

        $oTopMenu = Menu::byName('Menu Principal Superior');

        $aContentCategories = ContentCategory::has('contentArticles')->inRandomOrder()->get();

        $aContentArticlesTags = ContentArticle::whereNotNull('tags')->inRandomOrder()->get();

        $aTags = [];
        $auxTags = [];
        if($aContentArticlesTags->isNotEmpty()){

            foreach($aContentArticlesTags as $oContentArticle){
                if(is_array($oContentArticle->tags)){
                    foreach($oContentArticle->tags as $tag){
                        if(trim($tag)){
                            if(! in_array($tag, $auxTags)){
                                $aTags[] = [
                                    'contentCategorySlug' => $oContentArticle->contentCategory->slug,
                                    'tag' => $tag,
                                ];
                                $auxTags[] = $tag;
                            }
                        }
                        if(count($aTags) >= 15){
                            break;
                        }
                    }
                }else{
                    $posComma = strpos($oContentArticle->tags, ',');
                    if($posComma === false){
                        if(! in_array($oContentArticle->tags, $auxTags)){
                            $aTags[] = [
                                'contentCategorySlug' => $oContentArticle->contentCategory->slug,
                                'tag' => $oContentArticle->tags,
                            ];
                            $auxTags[] = $tag;
                        }
                    }
                    if(count($aTags) >= 15){
                        break;
                    }
                }
                if(count($aTags) >= 15){
                    break;
                }
            }
        }

        $data = [
    		// Datos de configuracion general del sitio
            'title' => $title,
            'oConfiguration' => $this->oConfiguration,
            'oStorage' => $this->oStorage,

            // menus de navegacion
            'topMenuItems' => $oTopMenu ? $oTopMenu->menuItems()->firstLevel()->orderBy('order', 'asc')->get() : null,
            
            // Datos para el contenido de la pagina
            'aContentCategories' => $aContentCategories,
            'mainArticles' => ContentArticle::available()->orderBy('publication_date', 'desc')->skip(0)->take(3)->get(),
            'secondaryArticles' => ContentArticle::available()->orderBy('publication_date', 'desc')->skip(3)->take(4)->get(),
            'listArticles' => ContentArticle::available()->orderBy('publication_date', 'desc')->skip(7)->take(3)->get(),
            'aIndicators' => Indicator::where('unity', 'USD')->orderBy('created_at', 'desc')->skip(0)->take(4)->get(),
            'aTags' => $aTags,
            
    	];

    	$view = view('frontend.home', $data);
        
        if($request->ajax()){
            $sections = $view->renderSections();
            $aSections = [
                'type' => 'html',
                'mainContent' => $sections['main-content'], 
                'scripts' => $sections['custom-js']
            ];
            return response()->json($aSections, 200);
        }
        
        return $view;
        
        
    }
}
