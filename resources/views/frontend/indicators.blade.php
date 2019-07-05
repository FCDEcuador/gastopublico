@extends('frontend.layouts.frontend-layout')

@section('title')
	Indicadores
@endsection

@section('custom-css')	
    {!! Html::style('public/backend/assets/plugins/bootstrap-sweetalert/sweetalert.css') !!}
@endsection


@section('main-content')
	<div class="container mt-3">

	<!-- BEGIN SECCION SLIDER PUBLLLICACIONES -->
		<div class="row mt-3">
			<div class="col-sm-12">
				<div class="titulo border-bottom border-success text-default text-uppercase">Datos e indicadores de interés</div>
				<div class="text-muted fz14 mt-3 mb-2">Las grandes cifras del gasto público.
				<p class="mt-3">Entérate de las principales cifras financieras que nos dejó el ejercicio fiscal del año 2016, abarcando desde los ingresos y gastos del Gobierno Central y los Municipios, hasta la deuda y activos con los que se cerró el periodo. Visualiza estos montos globales y per cápita, expresados tanto en dólares como porcentaje del PIB. 
				</p></div>
			</div>
		</div>


	<!-- END SECCION SLIDER PUBLLLICACIONES -->

	<div class="row mt-3">
	<!-- BEGIN SECCION LATERAL -->
		<div class="col-sm-3">
			<!-- BEGIN lo mas reciente -->
			

			<h5 class="celeste mt-3"><i class="fas fa-caret-square-right"></i> Tipo</h5>
			<div class="compartir shadow p-3 mb-4 bg-white rounded">
				<div class="elemento mt-3">
					<a role="button" href="" name="1" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Ingresos</a>
                        
                    <a role="button" href="" name="2" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Gastos</a>
                
                    <a role="button" href="" name="3" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Resultados</a>
                
                    <a role="button" href="" name="4" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Deuda pública</a>
					
				</div>
			</div>

			<h5 class="celeste mt-3"><i class="fas fa-chart-pie"></i> Indicador</h5>
			<div class="compartir shadow p-3 mb-4 bg-white rounded">
				<div class="elemento mt-3">
					<a role="button" href="" name="1" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Valor percápita</a>
                        
                    <a role="button" href="" name="2" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Valor Total</a>
					
				</div>
			</div>

			<h5 class="celeste mt-3"><i class="fas fa-list"></i> Unidad</h5>
			<div class="compartir shadow p-3 mb-4 bg-white rounded">
				<div class="elemento mt-3">
					<a role="button" href="" name="1" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">USD</a>
                        
                    <a role="button" href="" name="2" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Porcentaje</a>
                
				</div>
			</div>
			<!-- END lo mas reciente -->
			<div class="compartir shadow p-3 mb-4 bg-white rounded">
				<h6 class="celeste">Compartir</h6>
				<div class="elemento mt-3">
					<div class="addthis_inline_share_toolbox d-flex justify-content-center"></div>
					<div class="mt-2 text-center celeste">Gasto Público</div>
				</div>
			</div>
			
		</div>
		<!-- END SECCION LATERAL -->

		<div class="col-sm-9">

			<div class="row mt-3 pl-3 pr-3 pl-sm-0 pr-sm-0">
				<div class="col-12 mb-3 border-bottom border-success pb-3">
					<div class="row">
						@if($aIndicators->isNotEmpty())
							@foreach($aIndicators as $oIndicator)
								<div class="col-6 mb-3">
									<div class="card">
									  <div class="card-body">
									  	<h5 class="card-title fz16"><i class="fas fa-chart-line celeste"></i> {!! $oIndicator->title !!}</h5>
									    <p class="card-text fz14">{!! $oIndicator->summary !!}</p>
									    <p class="text-right pt-3 border-top fz24 mb-0">{!! $oIndicator->unity == 'USD' ? 'USD' : '' !!} {!! $oIndicator->value !!} {!! $oIndicator->unity == 'Porcentaje' ? '%' : '' !!}</p>
									    
									  </div>
									</div>
								</div>
							@endforeach
						@endif
						
					</div>
				</div>
				
				<div class="col-12">
					{!! $aIndicators->links() !!}
				</div>
			</div>


		</div>
	</div>
</div>
@endsection


@section('custom-js')
	{!! Html::script('public/backend/assets/plugins/bootstrap-sweetalert/sweetalert.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/js/ui-sweetalert.min.js', ['type' => 'text/javascript']) !!}
@endsection