@extends('frontend.layouts.frontend-layout')

@section('title')
	Gasto Público
@endsection

@section('custom-css')
@endsection



@section('main-content')
	<div class="container mb-3">
		<!-- BEGIN SECCION CASOS DE CORRUPCION -->
		
			<div class="row">
				<div class="col-md-8 mb-3 mb-md-0">
					<div class="p-3 shadow bg-white rounded">
						<div class="col-12 mr-sm-3">
							<h1 class="titulo border-bottom border-info text-default mt-3 mt-sm-0 text-sm-left mb-3">Destacado</h1>
			    		</div>
						<!--  BEGIN CAROUSEL  -->
				      	<div id="casos-corrupcion" class="carousel slide" data-ride="carousel">
				      	  
						  <div class="carousel-inner">
						    
						    @if($mainArticles->isNotEmpty())
							    @foreach($mainArticles as $oMainArticle)
								    <div class="carousel-item {!! $loop->first ? 'active' : '' !!}">
								    	<div class="row no-gutters">
								    		<a href="{!! route('content-article', [$oMainArticle->contentCategory->slug, $oMainArticle->slug]) !!}"><img class="d-block img-fluid mx-auto img-corrupcion" src="{!! $oStorage->url($oMainArticle->main_multimedia) !!}" alt="{{ $oMainArticle->title }}"></a>
								    		<div class="col-sm-12 pt-3">
								    			<h5><a href="{!! route('content-article', [$oMainArticle->contentCategory->slug, $oMainArticle->slug]) !!}">{{ $oMainArticle->title }}</a></h5>
								    			<div class="pt-1  text-justify text-muted">{{ $oMainArticle->summary }}</div>
								    		</div>
								    	</div>
								    </div>
							    @endforeach
						    @endif

						  </div>
						  <a class="carousel-control-prev" href="#casos-corrupcion" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#casos-corrupcion" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						  <ol class="carousel-indicators d-none d-sm-flex">
						    @if($mainArticles->isNotEmpty())
							    @foreach($mainArticles as $oMainArticle)
							    	<li data-target="#casos-corrupcion" data-slide-to="{{ $loop->index }}" class="{!! $loop->first ? 'active' : '' !!}"></li>
							    @endforeach
						    @endif
						  </ol>
						</div>
			      	<!--  END CAROUSEL -->
			      </div>
				</div>
				<div class="col-sm-4">
					<!-- BEGIN SECCION LATERAL -->
					
					<div class="shadow p-3 mb-4 bg-white rounded">
						<div class="col-12 mr-sm-3">
							<h1 class="titulo border-bottom border-info text-default mt-3 mt-sm-0 text-sm-left mb-3">Publicaciones  <small><a href="{{ url('/informes-del-observatorio') }}">ver más</a></small></h1>
			    		</div>
						
						@if($secondaryArticles->isNotEmpty())
							@foreach($secondaryArticles as $oSecondaryArticle)
								<div class="row elemento no-gutters">
									<div class="col-sm-5">
										<a href="{!! route('content-article', [$oSecondaryArticle->contentCategory->slug, $oSecondaryArticle->slug]) !!}" class="text-muted"><img src="{!! $oStorage->url($oSecondaryArticle->main_multimedia) !!}" alt="{{ $oSecondaryArticle->title }}" title="{{ $oSecondaryArticle->title }}" class="w-100 mt-2"></a>
									</div>
									<div class="col-sm-7">
										<h6 class="mb-0 ml-sm-3 mb-0 mt-3 mt-sm-0"><a href="{!! route('content-article', [$oSecondaryArticle->contentCategory->slug, $oSecondaryArticle->slug]) !!}" class="text-muted">{{ $oSecondaryArticle->summary }}</a></h6>
										<div class="text-right text-muted fz12 mt-1">
										      {!! TimeFormat::dateShortFormat($oSecondaryArticle->created_at) !!}
									    </div>
									</div>
								</div>
								<hr class="border-success">
							@endforeach
						@endif

					</div>
				</div>
			</div>
		<!-- END SECCION CASOS DE CORRUPCION -->
	</div>


	<div class="container mb-3">
		<!-- BEGIN SECCION CASOS DE CORRUPCION -->
			<div class="row">
				<div class="col-sm-4">
					<!-- BEGIN SECCION LATERAL -->
					
					<div class="shadow p-3 mb-4 bg-white rounded">
						<h1 class="titulo border-bottom border-info text-default mt-3 mt-sm-0 text-sm-left mb-3">Datos e indicadores  <small>ver más</small></h1>
						@if($aIndicators->isNotEmpty())
							@foreach($aIndicators as $oIndicator)
								<div class="row">
			                        <div class="col-12 align-self-center">
			                            <h5 class="text-center sinmargen">
			                            	{{ $oIndicator->title }}
			                        	</h5>
			                        </div>
			                        <div class="col-12 align-self-center">
			                            <p class="mb-1 text-center fz12">
			                                {{ $oIndicator->unity == 'USD' ? 'Dólares Americanos' : 'Porcentaje' }}
			                            </p>
			                            <h5 class=" text-center">
			                                {{ $oIndicator->unity == 'USD' ? 'USD' : '' }} {{ $oIndicator->value }} {{ $oIndicator->unity == 'Porcentaje' ? '%' : '' }}
			                            </h5>
			                        </div>
			                    </div>
			                    <hr class="border-success mt-1 mb-3">
		                    @endforeach
	                    @endif

					</div>
				</div>
				<div class="col-sm-4">
					

					<div class="p-3 shadow bg-white rounded">
						<div class="col-12 mr-sm-3">
							<h1 class="titulo border-bottom border-info text-default mt-3 mt-sm-0 text-sm-left mb-3">Noticias Observatorio <small><a href="{{ url('/informes-del-observatorio') }}">ver más</a></small></h1>
							<div class="text-right text-muted fz12 mt-1 mb-2">Infórmate de nuestras actividades</div>
			    		</div>
						<!--  BEGIN CAROUSEL  -->
				      	<div id="noticias" class="carousel slide" data-ride="carousel">
				      	  
						  <div class="carousel-inner">
						    
						    @if($listArticles->isNotEmpty())
							    @foreach($listArticles as $oListArticle)
								    <div class="carousel-item {!! $loop->first ? 'active' : '' !!}">
								    	<div class="row">
								    		<div class="col-sm-12">
								    			<a href="{!! route('content-article', [$oListArticle->contentCategory->slug, $oListArticle->slug]) !!}" class="subtitulo"><img class="d-block img-fluid mx-auto img-corrupcion" src="{!! $oStorage->url($oListArticle->main_multimedia) !!}" alt="{{ $oListArticle->title }}"></a>
								    			<div class="text-right text-muted fz12 mt-3">{!! TimeFormat::dateShortFormat($oListArticle->created_at) !!}</div>
								    			<h6 class="mt-3"><a href="{!! route('content-article', [$oListArticle->contentCategory->slug, $oListArticle->slug]) !!}" class="subtitulo">{{ $oListArticle->title }}</a></h6>
								    			<div class="pb-3 text-justify text-muted">{{ $oListArticle->summary }}</div>
								    		</div>
								    	</div>
								    </div>
							    @endforeach
						    @endif
						    

						  </div>
						  
							  <a class="carousel-control-prev" href="#noticias" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#noticias" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							  <ol class="carousel-indicators d-none d-sm-flex">
							    @if($listArticles->isNotEmpty())
								    @foreach($listArticles as $oListArticle)
										<li data-target="#noticias" data-slide-to="{{ $loop->index }}" class="{!! $loop->first ? 'active' : '' !!}"></li>    	
								    @endforeach
							    @endif
							  </ol>
							 </div>
						
			      	<!--  END CAROUSEL -->
			      </div>

			      <article class="shadow p-3 mt-3 rounded naranjoB">
						<div class="elemento">
							<div class="div-relative">
	                            <h5 class="text-center blanco"><a href="http://www.ciudadaniaydesarrollo.org/" class="text-white">Fundación de Ciudadania y Desarrollo</a></h5>
	                            <p class="text-center mb-0">Conoce nuestras publicaciones y participaciones para mejorar la rendición de cuentas públicas y la calidad del gasto en nuestro país.</p>
	                            
	                        </div>
						</div>				
					</article>


				</div>
				
				<div class="col-md-4 mb-3 mb-md-0">


					<article class="shadow p-3 rounded nuevoB">
						<div class="elemento">
							<div class="div-relative" >
	                            <a class="twitter-timeline" data-lang="es" data-height="600" data-link-color="#487d27" href="https://twitter.com/EsMiPlataEC?ref_src=twsrc%5Etfw">Tweets de EsMiPlataEC</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	                        </div>
						</div>				
					</article>
					
					

				</div>
			</div>
		<!-- END SECCION CASOS DE CORRUPCION -->
	</div>


		<!-- BEGIN SECCION PUBLICACIONES -->
			<div class="container mb-3">
				<div class="row pb-3 pt-3 shadow bg-white rounded">
					<div class="col-12">
						<h1 class="titulo border-bottom border-info text-default mb-3">Lista de Tags</h1>
						<div class="text-right text-muted fz12 mt-1 mb-2">Lista de Tags principales de contenido.</div>
					</div>
					<div class="col-sm-12">
						<div class="lista-inline text-center flex">
                            @if(is_array($aTags))
								@foreach($aTags as $tag)
									<a role="button" href="{!! route('content-category-with-tag', [$tag['contentCategorySlug'], 'tag', $tag['tag']]) !!}" name="1" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">{{ $tag['tag'] }}</a>
								@endforeach
							@endif
	                    </ul>
					</div>
				</div>
			</div>
		<!-- END SECCION PUBLICACIONES -->	

	</div>
@endsection



@section('custom-js')
@endsection