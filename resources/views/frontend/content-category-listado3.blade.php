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

		<div class="row mt-3 pl-3 pr-3 pl-sm-0 pr-sm-0">
			
			@if($contentArticlesList->isNotEmpty())
				@foreach($contentArticlesList as $oContentArticleList)
					<div class="col-12 mb-3 border-bottom border-success pb-3">
						<div class="row">
							<div class="col-sm-5 d-flex align-items-center">
								<a href="{!! route('content-article', [$oContentArticleList->contentCategory->slug, $oContentArticleList->slug]) !!}" role="button"><img class="d-block w-100" src="{!! $oStorage->url($oContentArticleList->main_multimedia) !!}" alt="{!! $oContentArticleList->title !!}"></a>
							</div>
							<div class="col-sm-7">							
								<h3 class="subtitulo"><a href="{!! route('content-article', [$oContentArticleList->contentCategory->slug, $oContentArticleList->slug]) !!}" role="button">{!! $oContentArticleList->title !!}</a></h3>
								<span class="d-block text-right fz12 mb-3">{!! $oContentArticleList->summary !!}</p>
								<a href="{!! route('content-article', [$oContentArticleList->contentCategory->slug, $oContentArticleList->slug]) !!}" role="button" class="btn btn-success btn-sm float-right">Ver más</a>
							</div>
						</div>
					</div>
				@endforeach
			@endif

			<div class="col-12">
				{!! $contentArticlesList->links() !!}
			</div>
		</div>

	</div>
@endsection


@section('custom-js')
	{!! Html::script('public/backend/assets/plugins/bootstrap-sweetalert/sweetalert.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/js/ui-sweetalert.min.js', ['type' => 'text/javascript']) !!}
@endsection