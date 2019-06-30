<?php

namespace BlaudCMS;

use Illuminate\Database\Eloquent\Model;
use Alsofronie\Uuid\UuidModelTrait;

/**
* Clase para administración de indicadores
* @Autor Raúl Chauvin
* @FechaCreacion  2019/05/03
* @Content
*/

class Indicator extends Model
{
    use UuidModelTrait;

    /**
     * Tabla de la Base de Datos usada por el modelo.
     *
     * @var string
     */
    protected $table = 'indicators';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'type',
        'indicator',
        'unity',
        'value',
    ];

    /**
     * Atributos generados automáticamente por el modelo.
     *
     * @var array
     */
    protected $guarded = [
        'created_at', 
        'updated_at', 
        'id',
    ];


    /**
    * Metodo que devuelve un modelo Indicator encontrado por titulo o falso en caso de no encontrarlo
    * @Autor Raúl Chauvin
    * @FechaCreacion  2019/05/03
    *
    * @param string sTitle
    * @return Indicator
    */
    public static function byTitle($sTitle = ''){
        return $sTitle ? Indicator::whereTitle($sTitle)->first() : FALSE;
    }

    /**
    * Metodo que devuelve un modelo Indicator encontrado por slug o falso en caso de no encontrarlo
    * @Autor Raúl Chauvin
    * @FechaCreacion  2019/03/02
    *
    * @param string sSlug
    * @return Indicator
    */
    public static function bySlug($sSlug = ''){
        return $sSlug ? Indicator::whereSlug($sSlug)->first() : FALSE;
    }


    /*************************************************************************************************
        Metodos scope para utilizar en el controlador
        Autor Raúl Chauvin
        FechaCreacion  2019/05/03
        EJ: Obtener los indicadores de tipo "Ingresos" con indicador "percapita" y unidad "usd"
		$aIndicadores = Indicator::byType('ingresos')->byIndicator('percapita')->byUnity('usd')->get();
    **************************************************************************************************/

    public function scopeByType($sQuery, $sType){
        return $sQuery->where('type', $sType);
    }

    public function scopeByIndicator($sQuery, $sIndicator){
        return $sQuery->where('indicator', $sIndicator);
    }

    public function scopeByUnity($sQuery, $sUnity){
        return $sQuery->where('unity', $sUnity);
    }


    /**
     * Metodo que busca Casos de Corrupcion
     * @Autor Raúl Chauvin
     * @FechaCreacion  2017/06/09
     *
     * @param string sStringSearch
     * @param integer iPaginate
     *
     * @return Indicator[]
     */
    public static function searchIndicators($sStringSearch = null, $iPaginate = null){
    	
	    $aIndicators = null;

    	if($sStringSearch){
    		$aIndicators = Indicator::where(function($sQuery) use ($sStringSearch){
            						$sQuery->where('title','like','%'.$sStringSearch.'%')
                                    ->orWhere('summary','like','%'.$sStringSearch.'%')
                                    ->orWhere('type','like','%'.$sStringSearch.'%')
                                    ->orWhere('indicator','like','%'.$sStringSearch.'%')
                                    ->orWhere('unity','like','%'.$sStringSearch.'%');
            					});

    		
    	}

    	if($aIndicators){
			$aIndicators = $iPaginate ? $aIndicators->orderBy('created_at', 'desc')->paginate($iPaginate) : $aIndicators->orderBy('created_at', 'desc')->get();
		}else{
			$aIndicators = $iPaginate ? Indicator::orderBy('created_at', 'desc')->paginate($iPaginate) : Indicator::orderBy('created_at', 'desc')->get();
		}
    	
    	return $aIndicators;
    }

}
