@extends('frontend.layouts.frontend-layout')

@section('title')
	
@endsection

@section('custom-css')	
    {!! Html::style('public/backend/assets/plugins/bootstrap-sweetalert/sweetalert.css') !!}
    @if($oContentArticle->extra_headers != '')
    	{!! $oContentArticle->extra_headers !!}
    @else
    	{!! $oContentCategory->extra_headers !!}
    @endif
@endsection



@section('main-content')
	
	
	<div class="container mt-3">
		<div class="row mt-3">
			<div class="col-sm-12">
				<div class="titulo border-bottom border-success ext-success text-uppercase">{!! $oContentCategory->title !!}</div>
			</div>
			<div class="col-sm-12">
				<nav aria-label="breadcrumb mb-sm-3">
				  <ol class="breadcrumb mb-0">
				    <li class="breadcrumb-item"><a href="{!! route('home') !!}">Home</a></li>
				    <li class="breadcrumb-item"><a href="{!! route('content-category', [$oContentCategory->slug]) !!}">{!! $oContentCategory->name !!}</a></li>
				    <li class="breadcrumb-item active" aria-current="page">{!! $oContentArticle->title !!}</li>
				  </ol>
				</nav>
			</div>
		</div>

		<div class="row mt-3">
		<!-- BEGIN SECCION CONTENIDDO -->
			<div class="col-sm-8">
				<div class="shadow p-3 mb-5 bg-white rounded">
					<div class="row mt-1">
					    <div class="align-self-start text-muted fz12 mb-2">
					      {!! TimeFormat::dateShortFormat($oContentArticle->created_at) !!}
					      @if($oContentArticle->author)
					      	| <strong>Autor:</strong> {!! $oContentArticle->author !!}
					      @endif
					    </div>
				  	</div>
					<h2 class=" text-default mt-2 mb-2">{!! $oContentArticle->title !!}</h2>
					<img src="{!! $oStorage->url($oContentArticle->main_multimedia) !!}" alt="{!! $oContentArticle->title !!}" title="{!! $oContentArticle->title !!}" class=" w-100">
					@if($oContentArticle->multimedia_caption)
						<p class="fz12 mt-2 text-muted">{!! $oContentArticle->multimedia_caption !!}</p>
					@endif
					
				  	<div class="content mt-3">
					  	
						<div class="text-justify text-muted">
							<p><i><b>{!! $oContentArticle->summary !!}</b></i></p>
							{!! $oContentArticle->content !!}
						</div>
					</div>
				</div>
			</div>
			
		<!-- END SECCION CONTENIDDO -->

		<!-- BEGIN SECCION LATERAL -->
			<div class="col-sm-4">
				<!-- BEGIN lo mas reciente -->
				<div class="shadow p-3 mb-4 bg-white rounded">
					<h5 class="">Lo más reciente</h5>
					@if($contentArticlesListRecent->isNotEmpty())
						@foreach($contentArticlesListRecent as $oContentArticleRecent)
							<div class="elemento">
								<a href="{!! route('content-article', [$oContentArticle->contentCategory->slug, $oContentArticleRecent->slug]) !!}" class="text-muted"><img src="{!! $oStorage->url($oContentArticleRecent->main_multimedia) !!}" alt="{!! $oContentArticleRecent->title !!}" title="{!! $oContentArticleRecent->title !!}" class="w-100 mt-2"></a>
								<h6 class="mt-3"><a href="{!! route('content-article', [$oContentArticle->contentCategory->slug, $oContentArticleRecent->slug]) !!}" class="text-muted">{!! $oContentArticleRecent->title !!}</a></h6>
								<div class="row mt-1">
								    <div class="col align-self-start text-muted">
								      {!! TimeFormat::dateShortFormat($oContentArticle->created_at) !!}
								    </div>
							  	</div>
							</div>
							<hr class="border-success">
						@endforeach
					@endif
									
				</div>
				<!-- END lo mas reciente -->

				<!-- BEGIN conoce mas -->
				<div class="shadow p-3 mb-4 bg-white rounded">
					<h5 class="">Conoce más casos</h5>
					@if($contentArticlesList->isNotEmpty())
						@foreach($contentArticlesList as $oContentArticleList)
							<div class="elemento">
								<a href="{!! route('content-article', [$oContentArticle->contentCategory->slug, $oContentArticleList->slug]) !!}" class="text-muted"><img src="{!! $oStorage->url($oContentArticleList->main_multimedia) !!}" alt="{!! $oContentArticleList->title !!}" title="{!! $oContentArticleList->title !!}" class="w-100 mt-2"></a>
								<h6 class="mt-3"><a href="{!! route('content-article', [$oContentArticle->contentCategory->slug, $oContentArticleList->slug]) !!}" class="text-muted">{!! $oContentArticleList->title !!}</a></h6>
								<div class="row mt-1">
								    <div class="col align-self-start text-muted">
								      {!! TimeFormat::dateShortFormat($oContentArticle->created_at) !!}
								    </div>
							  	</div>
							</div>
							<hr class="border-success">
						@endforeach
					@endif
									
				</div>
				<!-- END conoce mas -->

				<div class="compartir shadow p-3 mb-4 bg-white rounded">
					<h5 class="">Compartir</h5>
					<div class="elemento mt-3">
						<div class="addthis_inline_share_toolbox d-flex justify-content-center"></div>
					</div>
				</div>

				<div class="compartir shadow p-3 mb-4 bg-white rounded">
					<h5 class="">Lista de Tags</h5>
					<div class="elemento mt-3">
						
						<ul class="text-muted">
							@if($contentCategoriesList->isNotEmpty())
								@foreach($contentCategoriesList as $oContentCategoryList)
									<li><a href="{!! route('content-category', [$oContentCategoryList->slug]) !!}" class="text-muted">{!! $oContentCategoryList->name !!}</a></li>
								@endforeach
							@endif
						</ul>
					</div>
				</div>
				
			</div>
		<!-- END SECCION LATERAL -->
			
		</div>


	</div>
	
	
@endsection



@section('custom-js')
	{!! Html::script('public/backend/assets/plugins/bootstrap-sweetalert/sweetalert.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/backend/assets/js/ui-sweetalert.min.js', ['type' => 'text/javascript']) !!}
@endsection