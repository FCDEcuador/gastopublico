<?php

namespace BlaudCMS\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use BlaudCMS\Http\Controllers\Controller;

use BlaudCMS\ContentCategory;
use BlaudCMS\ContentArticle;

use Sitemap;
use Storage;


/**
* Clase para generacion de sitemaps del portal
* @Autor Raúl Chauvin
* @FechaCreacion  2020/07/16
*/

class SitemapsController extends Controller
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
     * Constructor del Controller, iniciamos los middlewares para validar que el usuario tenga los permisos correctos
     * @Autor Raúl Chauvin
     * @FechaCreacion  2020/07/16
     */
    public function __construct(){
    	
    	$this->sStorageDisk = 'public';
        $this->oStorage = Storage::disk($this->sStorageDisk);
    }

    /**
     * Metodo para mostrar la lista de Sitemaps del portal
     * @Autor Raúl Chauvin
     * @FechaCreacion  2020/07/16
     *
     * @route /sitemap
     * @method GET
     * @return \Watson\Sitemap
     */
    public function index()
    {
        // You can use the route helpers too.
        Sitemap::addSitemap(route('sitemap.index'));
        $aContentCategories = ContentCategory::orderBy('updated_at', 'desc')->get();
        if($aContentCategories->isNotEmpty()){
        	foreach($aContentCategories as $oContentCategory){
        		Sitemap::addSitemap(route('sitemap.content-articles', [$oContentCategory->slug]));
        	}
        }
        
        return Sitemap::index();
    }


    /**
     * Metodo para mostrar el sitemap general
     * @Autor Raúl Chauvin
     * @FechaCreacion  2020/07/16
     *
     * @route /sitemap/home
     * @method GET
     * @return \Watson\Sitemap
     */
    public function home()
    {
        
        Sitemap::addTag(route('home'), date('Y-m-d H:i:s'), 'daily', '1.0');
        Sitemap::addTag(route('about-us'), date('Y-m-d H:i:s'), null, '0.8');
        Sitemap::addTag(route('contact-us'), date('Y-m-d H:i:s'), null, '0.8');
        Sitemap::addTag(route('indicators'), date('Y-m-d H:i:s'), 'daily', '0.8');
        $aContentCategories = ContentCategory::orderBy('updated_at', 'desc')->get();
        if($aContentCategories->isNotEmpty()){
        	foreach($aContentCategories as $oContentCategory){
        		Sitemap::addTag(route('content-category', [$oContentCategory->slug]), $oContentCategory->updated_at, null, '0.8');
        	}
        }

        return Sitemap::render();
    }

    /**
     * Metodo para mostrar el sitemap de articulos de contenido por categoria o seccion
     * @Autor Raúl Chauvin
     * @FechaCreacion  2019/02/16
     *
     * @route /sitemap/{contentCategorySlug?}
     * @method GET
     * @param string $sContentCategorySlug
     * @return \Watson\Sitemap
     */
    public function contentArticles($sContentCategorySlug = '')
    {
    	if($sContentCategorySlug){
            $oContentCategory = ContentCategory::bySlug($sContentCategorySlug);
            if(is_object($oContentCategory)){
            	$aContentArticles = $oContentCategory->contentArticles()->orderBy('updated_at', 'desc')->get();
            	if($aContentArticles->isNotEmpty()){
            		foreach($aContentArticles as $oContentArticle){
            			$sitemapContentArticleTag = Sitemap::addTag(route('content-article', [$oContentCategory->slug, $oContentArticle->slug]), $oContentArticle->updated_at, null, '0.6');
						if($oContentArticle->main_multimedia){
							$sitemapContentArticleTag->addImage(asset($this->oStorage->url($oContentArticle->main_multimedia)), $oContentArticle->title);
						}
            		}
            	}
            }
        }
        return Sitemap::render();
    }
}
