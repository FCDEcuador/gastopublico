<?php

namespace BlaudCMS\Http\Controllers\Backend\Content;

use Illuminate\Http\Request;
use BlaudCMS\Http\Controllers\Controller;
use BlaudCMS\Http\Traits\BackendAuthorizable;

use BlaudCMS\Configuration;
use BlaudCMS\Indicator;
use BlaudCMS\User;

use BlaudCMS\Http\Requests\Content\IndicatorCreateRequest;
use BlaudCMS\Http\Requests\Content\IndicatorUpdateRequest;

use Cocur\Slugify\Slugify;

use Storage;
use Auth;

/**
* Clase para manejo de biblioteca legal del portal web
* @Autor Raúl Chauvin
* @FechaCreacion  2019/03/03
* @Content
*/

class IndicatorsController extends Controller
{
    use BackendAuthorizable;

    /**
     * Variable para manejo de slugs al momento de guardar informacion.
     *
     * @var oSlugify
     */
    private $oSlugify;

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
     * Variable para verificar cual menu debe estar activo.
     *
     * @var activeMenu
     */
    private $activeMenu;

    /**
     * Constructor del Controller, iniciamos los middlewares para validar que el usuario tenga los permisos correctos
     * @Autor Raúl Chauvin
     * @FechaCreacion  2018/08/30
     */
    public function __construct(){
    	
    	// Agregando restriccion para usuarios logueados y que sean de backend
    	$this->middleware('auth');

        // Instanciamos el objeto de configuracion para obtener su data, si no existe creamos un nuevo objeto
        $oConfiguration = Configuration::find(1);
        if( ! is_object($oConfiguration)){
            $oConfiguration = new Configuration;
            $oConfiguration->id = 1;
            $oConfiguration->save();
        }
        $this->oConfiguration = $oConfiguration;

        $this->oSlugify = new Slugify();

        $this->sStorageDisk = 'public';
        $this->oStorage = Storage::disk($this->sStorageDisk);

        // Colocamos el valor en la variable $this->activeMenu 
        // para saber que item del menu de navegacion debe pintarse
        $this->activeMenu = 'content';
    }


    /**
     * Metodo para mostrar la lista de indicadores
     * @Autor Raúl Chauvin
     * @FechaCreacion  2019/05/03
     *
     * @route /backend/content/indicators/list
     * @method GET
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $indicatorsList = Indicator::paginate(20);
        $data = [
            // Datos generales para todas las vistas
            'activeMenu' => $this->activeMenu,
            'oConfiguration' => $this->oConfiguration,

            // Datos especificos para utilizar en la vista
            'oStorage' => $this->oStorage,
            'indicatorsList' => $indicatorsList,
        ];
        $view = view('backend.content.indicators.indicatorsList', $data);
        
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

    /**
     * Metodo para mostrar el formulario de creacion de nuevos indicadores en el sistema
     * @Autor Raúl Chauvin
     * @FechaCreacion  2019/05/03
     *
     * @route /backend/content/indicators/add
     * @method GET
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = [
            // Datos generales para todas las vistas
            'activeMenu' => $this->activeMenu,
            'oConfiguration' => $this->oConfiguration,

            // Datos especificos para utilizar en la vista
            'oStorage' => $this->oStorage,
            'oIndicator' => null,
        ];

        $view = view('backend.content.indicators.addEditIndicator', $data);
        
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

    /**
     * Metodo para guardar en la base de datos los nuevos indicadores ingresados desde el formulario
     * @Autor Raúl Chauvin
     * @FechaCreacion  2019/05/03
     *
     * @route /backend/content/indicators/add
     * @method POST
     * @param  \BlaudCMS\Http\Requests\Content\IndicatorCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndicatorCreateRequest $request)
    {

    	if( ! $request->ajax() ){
            $request->session()->flash('errorMsg', 'Unicamente se aceptan peticiones Ajax');
            return back();
        }

        $oIndicator = new Indicator;
        $oIndicator->title = $request->title;
        $oIndicator->slug = $this->oSlugify->slugify($request->title);
        $oIndicator->summary = $request->summary;
        $oIndicator->type = $request->type;
        $oIndicator->indicator = $request->indicator;
        $oIndicator->unity = $request->unity;
        $oIndicator->value = $request->value;

        if($oIndicator->save()){
            return response()->json(['status' => true , 'message' => 'El indicador '.$oIndicator->title.' ha sido agregado exisotamente.',], 200);
        }else{
            return response()->json(['status' => false , 'message' => 'El indicador '.$oIndicator->title.' no pudo ser agregado. Por favor intentelo nuevamente luego de unos minutos',], 200);
        }
    }

    /**
     * Metodo para mostrar el formulario de edicion de un indicador seleccionado previamente por su ID
     * @Autor Raúl Chauvin
     * @FechaCreacion  2019/05/03
     *
     * @route /backend/content/indicators/edit
     * @method GET
     * @param  string $sId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $sId = '')
    {
        if( ! $sId){
            if($request->ajax()){
                $aResponseData = [
                    'type' => 'alert', 
                    'title' => 'Biblioteca Legal', 
                    'message' => 'Por favor seleccione un indicador para poder editarlo.', 
                    'class' => 'error',
                ];
                return response()->json($aResponseData, 200);
            }
            $request->session()->flash('errorMsg', 'Por favor seleccione un indicador para poder editarlo.');
            return back();
        }
        
        $oIndicator = Indicator::find($sId);

        if( ! is_object($oIndicator)){
            if($request->ajax()){
                $aResponseData = [
                    'type' => 'alert', 
                    'title' => 'Biblioteca Legal', 
                    'message' => 'El indicador seleccionado no existe. Por favor seleccione otro.', 
                    'class' => 'error',
                ];
                return response()->json($aResponseData, 200);
            }
            $request->session()->flash('errorMsg', 'El indicador seleccionado no existe. Por favor seleccione otro.');
            return back();   
        }

        $data = [
            // Datos generales para todas las vistas
            'activeMenu' => $this->activeMenu,
            'oConfiguration' => $this->oConfiguration,

            // Datos especificos para utilizar en la vista
            'oStorage' => $this->oStorage,
            'oIndicator' => $oIndicator,
        ];

        $view = view('backend.content.indicators.addEditIndicator', $data);

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


    /**
     * Metodo para guardar en la base de datos los cambios realizados a un indicador previamente seleccionado por su ID desde el formulario
     * @Autor Raúl Chauvin
     * @FechaCreacion  2019/05/03
     *
     * @route /backend/content/indicators/edit
     * @method PUT/PATCH
     *
     * @param  \BlaudCMS\Http\Requests\Content\IndicatorUpdateRequest  $request
     * @param  string $sId
     * @return \Illuminate\Http\Response
     */
    public function update(IndicatorUpdateRequest $request, $sId = '')
    {
        if( ! $request->ajax() ){
            $request->session()->flash('errorMsg', 'Unicamente se aceptan peticiones Ajax');
            return back();
        }

        if( ! $sId){
            return response()->json(['status' => false , 'message' => 'Por favor seleccione un indicador para poder editarlo.',], 200);
        }

        $oIndicator = Indicator::find($sId);
        
        if( ! is_object($oIndicator)){
            return response()->json(['status' => false , 'message' => 'El indicador seleccionado no existe. Por favor seleccione otro.',], 200);
        }

        $oIndicator->title = $request->title;
        $oIndicator->slug = $this->oSlugify->slugify($request->title);
        $oIndicator->summary = $request->summary;
        $oIndicator->type = $request->type;
        $oIndicator->indicator = $request->indicator;
        $oIndicator->unity = $request->unity;
        $oIndicator->value = $request->value;

        if($oIndicator->save()){
        	return response()->json(['status' => true , 'message' => 'El indicador '.$oIndicator->title.' ha sido actualizado exisotamente.',], 200);
        }else{                    
            return response()->json(['status' => false , 'message' => 'El indicador '.$oIndicator->title.' no pudo ser actualizado. Por favor intentelo nuevamente luego de unos minutos',], 200);
        }
    }


    /**
     * Metodo para eliminar un indicador seleccionado previamente por su ID
     * @Autor Raúl Chauvin
     * @FechaCreacion  2019/05/03
     *
     * @route /backend/content/indicators/delete
     * @method DELETE
     * @param  \Illuminate\Http\Request  $request
     * @param  string $sId
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $sId = '')
    {
        if( ! $request->ajax() ){
            $request->session()->flash('errorMsg', 'Unicamente se aceptan peticiones Ajax');
            return back();
        }

        if( ! $sId){
            return response()->json(['status' => false , 'message' => 'Por favor seleccione un indicador para poder eliminarlo.',], 200);
        }

        $oIndicator = Indicator::find($sId);
        
        if( ! is_object($oIndicator)){
            return response()->json(['status' => false , 'message' => 'El indicador seleccionado no existe. Por favor seleccione otra.',], 200);
        }

        $title = $oIndicator->title;

        if($oIndicator->delete()){
        	return response()->json(['status' => true , 'message' => 'El indicador '.$title.' ha sido eliminado exitosamente.',], 200);
        }else{
            return response()->json(['status' => false , 'message' => 'El indicador '.$title.' no pudo ser eliminado. Por favor intentelo nuevamente luego de unos minutos.',], 200);
        }
    }
}
