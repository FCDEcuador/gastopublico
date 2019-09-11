@extends('frontend.layouts.frontend-layout')

@section('title')
	{!! $oContentCategory->title !!}
@endsection

@section('custom-css')	
    {!! Html::style('public/backend/assets/plugins/bootstrap-sweetalert/sweetalert.css') !!}
    {!! $oContentCategory->extra_headers !!}
@endsection


@section('main-content')
	<div class="container mt-3">

		<!-- BEGIN SECCION SLIDER PUBLLLICACIONES -->
			<div class="row mt-3">
				<div class="col-sm-12">
					<div class="titulo border-bottom border-success text-default text-uppercase">{!! $oContentCategory->name !!}</div>
					<div class="text-muted fz14 mt-3 mb-2">{!! $oContentCategory->subtitle !!}
					<p class="mt-3">{!! $oContentCategory->meta_description !!}
					</p></div>
				</div>
			</div>


		<!-- END SECCION SLIDER PUBLLLICACIONES -->

		<div class="row mt-3">
		<!-- BEGIN SECCION LATERAL -->
			<div class="col-sm-3">
				<!-- BEGIN lo mas reciente -->
				<h5 class="celeste mt-3"><i class="fas fa-caret-square-right"></i> Secciones</h5>
				@if($aContentCategories->isNotEmpty())
					<div class="compartir shadow p-3 mb-4 bg-white rounded">
						<div class="elemento mt-3">
							@foreach($aContentCategories as $oContentCategory)
								<a role="button" href="{{ route('content-category', [$oContentCategory->slug]) }}" name="1" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">{{ $oContentCategory->name }}</a>
							@endforeach
						</div>
					</div>
				@endif
				<!-- END lo mas reciente -->
				<!--div class="compartir shadow p-3 mb-4 bg-white rounded">
					<h6 class="celeste">Compartir</h6>
					<div class="elemento mt-3">
						<div class="addthis_inline_share_toolbox d-flex justify-content-center"></div>
						<div class="mt-2 text-center celeste">Gasto Público</div>
					</div>
				</div-->
				
			</div>
			<!-- END SECCION LATERAL -->

			<div class="col-sm-9">

				<div class="row mt-3 pl-3 pr-3 pl-sm-0 pr-sm-0">
					<div class="col-12 mb-3 border-bottom border-success pb-3">
						<div class="row">
							@if($contentArticlesList->isNotEmpty())
								@foreach($contentArticlesList as $oContentArticleList)
									<div class="col-sm-4 col-6 mb-3">
										<div class="card">
										  <a href="{!! route('content-article', [$oContentArticleList->contentCategory->slug, $oContentArticleList->slug]) !!}"><img class="card-img-top" src="{!! $oStorage->url($oContentArticleList->main_multimedia) !!}" alt="{!! $oContentArticleList->title !!}"></a>
										  <div class="card-body">
										  	<h5 class="card-title fz16"><a href="{!! route('content-article', [$oContentArticleList->contentCategory->slug, $oContentArticleList->slug]) !!}"> {!! $oContentArticleList->title !!}</a></h5>
										    <p class="card-text fz14">{!! $oContentArticleList->summary !!}</p>
										  </div>
										</div>
									</div>
								@endforeach
							@endif
							
						</div>
					</div>
					
					<div class="col-12">
						{!! $contentArticlesList->links() !!}
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