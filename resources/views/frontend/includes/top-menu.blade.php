<!-- BEGIN SLIDER HEADER REPEAT ALL SITE -->

<div class="container">
	<div class="row mb-4 mt-3">
		    <div class="col-12 col-sm-3 media mt-3 mt-sm-0 mb-3 mb-md-0 justify-content-end">
		      	<a href="{{ route('home') }}" class="align-self-center mx-auto mx-sm-0 ">
		      		@if($oConfiguration->frontend_logo != '')
		      			<img src="{!! asset($oStorage->url($oConfiguration->frontend_logo)) !!}" />
		      		@else
		      			<img src="{{ asset('public/frontend/images/logo-sitio.png') }}" >
		      		@endif
		      	</a>
		    </div>
		    <div class="col-12 col-sm-9">
		    	<!--  BEGIN MENU  -->
		    	<nav class="navbar navbar-expand-lg navbar-light mt-sm-3 float-right menu">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav mr-auto">
				    	@if($topMenuItems)
				      		@if($topMenuItems->isNotEmpty())
				      			@foreach($topMenuItems as $oTopMenuItem)
				      				@php
		                          		$subTopMenuItems = $oTopMenuItem->menuItems()->orderBy('order', 'asc')->get();
		                        	@endphp
		                        	@if($subTopMenuItems->isNotEmpty())
		                        		<li class="nav-item dropdown">
				        
									        <a class="nav-link dropdown-toggle" href="{!! url($oTopMenuItem->link) !!}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="{!! $oTopMenuItem->target !!}" {!! $oTopMenuItem->target == '_blank' ? 'rel="noopener noreferrer"' : '' !!}>
									          {!! $oTopMenuItem->title !!}
									        </a>
									        
									        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
									          	@foreach($subTopMenuItems as $oSubTopMenuItem)
									          		<a class="dropdown-item" href="{!! url($oSubTopMenuItem->link) !!}" target="{!! $oSubTopMenuItem->target !!}" {!! $oSubTopMenuItem->target == '_blank' ? 'rel="noopener noreferrer"' : '' !!}>
									          			{!! $oSubTopMenuItem->title !!}
									          		</a>
									          	@endforeach
									        </div>

								      	</li>
		                        	@else
		                        		<li class="nav-item">
								        	<a class="nav-link" href="{!! url($oTopMenuItem->link) !!}" target="{!! $oTopMenuItem->target !!}" {!! $oTopMenuItem->target == '_blank' ? 'rel="noopener noreferrer"' : '' !!}>
								        		{!! $oTopMenuItem->title !!}
								        	</a>
								      	</li>
		                        	@endif
				      			@endforeach
				      		@endif
				      	@endif
				      
				      	<li class="nav-item">
				        	<a href="https://www.facebook.com/EsMiPlataEC/" class="fz24 border text-secondary redes-ico mr-3 d-inline-block" target="_blank" rel="noopener noreferrer"><span class=""><i class="fab fa-facebook-f"></i></span></a>
				      	</li>
				      	<li class="nav-item">
				        	<a href="https://twitter.com/EsMiPlataEC" class="fz24 border text-secondary redes-ico mr-3 d-inline-block" target="_blank" rel="noopener noreferrer"><span class=""><i class="fab fa-twitter"></i></span></a>
				      	</li>

			
				    </ul>
				  </div>
				</nav>

		    	<!--  END MENU  -->


		      
		    </div>
	</div>
</div>

<!-- END  SLIDER HEADER REPEAT ALL SITE -->