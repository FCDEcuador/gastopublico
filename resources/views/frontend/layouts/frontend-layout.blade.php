<!DOCTYPE html>
<html>
	<head>
	<title>Observatorio de Gasto Público | @yield('title')</title>

    <!-- Required meta tags -->
    {!! Html::meta(null, null, ['charset' => 'utf-8']) !!}
    {!! Html::meta(null, 'IE=edge', ['http-equiv' => 'X-UA-Compatible']) !!}
    {!! Html::meta('viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no') !!}

    
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('public/frontend/images/apple-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('public/frontend/images/apple-icon-60x60.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/frontend/images/apple-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/frontend/images/apple-icon-76x76.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/frontend/images/apple-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('public/frontend/images/apple-icon-120x120.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('public/frontend/images/apple-icon-144x144.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('public/frontend/images/apple-icon-152x152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/frontend/images/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('public/frontend/images/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/frontend/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/frontend/images/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/frontend/images/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('public/frontend/images/manifest.json') }}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ asset('public/frontend/images/ms-icon-144x144.png') }}">
	<meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    {!! Html::style('public/frontend/css/bootstrap.min.css', ['crossorigin' => 'anonymous']) !!}
    <!-- Font-awesome CSS -->
    {!! Html::style('public/frontend/css/all.css', ['rel' => 'stylesheet']) !!}
	

    {!! Html::style('public/frontend/css/custom.css', ['rel' => 'stylesheet']) !!}


    {!! Html::script('public/frontend/js/jquery-3.3.1.slim.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/frontend/js/Chart.min.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/frontend/js/amcharts.js', ['type' => 'text/javascript']) !!}
    {!! Html::script('public/frontend/js/serial.js', ['type' => 'text/javascript']) !!}
    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    {!! Html::script('//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c6df5f8f2935ace', ['type' => 'text/javascript']) !!}
</head>
<body>

<!-- BEGIN SLIDER HEADER REPEAT ALL SITE -->

<div class="container">
	<div class="row mb-4 mt-3">
		    <div class="col-12 col-sm-3 media mt-3 mt-sm-0 mb-3 mb-md-0 justify-content-end">
		      	<a href="{{ route('home') }}" class="align-self-center mx-auto mx-sm-0 "><img src="{{ asset('public/frontend/images/logo-sitio.png') }}" ></a>
		    </div>
		    <div class="col-12 col-sm-9">
		    	<!--  BEGIN MENU  -->
		    	<nav class="navbar navbar-expand-lg navbar-light mt-sm-3 float-right menu">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="{{ route('home') }}">Inicio <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Visualizaciones</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Publicciones</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Nosotros
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Contacto</a>
				        </div>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link" href="#">Noticias</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Indicadores</a>
				      </li>
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


<<<<<<< HEAD
	<div id="mainContent">
		@yield('main-content')
=======
		      
		    </div>
>>>>>>> 315b761e2cb278508db1827b8b72189fd561eea1
	</div>
</div>

<!-- END  SLIDER HEADER REPEAT ALL SITE -->

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
					    <div class="carousel-item active">
					    	<div class="row no-gutters">
					    		<img class="d-block img-fluid mx-auto img-corrupcion" src="https://via.placeholder.com/600x280" alt="First slide">
					    		<div class="col-sm-12 pt-3 pr-5 pl-5">
					    			<h6><a>La costosa defensa internacional del Estado</a></h6>
					    			<div class="pt-1  text-justify text-muted">Más de USD 12 millones destinó el Gobierno ecuatoriano, solo en el 2017, para pagar a estudios jurídicos internacionales para que defiendan al país en los arbitrajes, juicios y controversias que enfrenta.</div>
					    		</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					    	<div class="row no-gutters">
					    		<img class="d-block img-fluid mx-auto img-corrupcion" src="https://via.placeholder.com/600x280" alt="First slide">
					    		<div class="col-sm-12 pt-3 pr-5 pl-5">
					    			<h6><a>¿Cómo se planea invertir en 2018?</a></h6>
					    			<div class="pt-1  text-justify text-muted">Esta visualización interactiva permite revisar el Plan Anual de Inversiones 2018 y qué instituciones invertirán más. Navegue por cada una de las pestañas para mirar más información.</div>
					    		</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					      	<div class="row no-gutters">
					    		<img class="d-block img-fluid mx-auto img-corrupcion" src="https://via.placeholder.com/600x280" alt="First slide">
					    		<div class="col-sm-12 pt-3 pr-5 pl-5">
					    			<h6><a>¿Cómo se planea invertir en 2018?</a></h6>
					    			<div class="pt-1  text-justify text-muted">Esta visualización interactiva permite revisar el Plan Anual de Inversiones 2018 y qué instituciones invertirán más. Navegue por cada una de las pestañas para mirar más información.</div>
					    		</div>
					    	</div>
					    </div>
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
					    <li data-target="#casos-corrupcion" data-slide-to="0" class="active"></li>
					    <li data-target="#casos-corrupcion" data-slide-to="1"></li>
					    <li data-target="#casos-corrupcion" data-slide-to="2"></li>
					  </ol>
					</div>
		      	<!--  END CAROUSEL -->
		      </div>
			</div>
			<div class="col-sm-4">
				<!-- BEGIN SECCION LATERAL -->
				
				<div class="shadow p-3 mb-4 bg-white rounded">
					<div class="col-12 mr-sm-3">
						<h1 class="titulo border-bottom border-info text-default mt-3 mt-sm-0 text-sm-left mb-3">Plublicaciones  <small>ver más</small></h1>
		    		</div>
					<div class="row elemento no-gutters">
						<div class="col-sm-5">
							<img src="https://via.placeholder.com/600x280" alt="" title="" class="w-100 mt-2">
						</div>
						<div class="col-sm-7">
							<h6 class="ml-3 mb-0"><a href="" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h6>
							<div class="text-right text-muted fz12 mt-1">
							      16 de Enero de 2000
						    </div>
						</div>
					</div>
					<hr class="border-success">
					<div class="row elemento no-gutters">
						<div class="col-sm-5">
							<img src="https://via.placeholder.com/600x280" alt="" title="" class="w-100 mt-2">
						</div>
						<div class="col-sm-7">
							<h6 class="ml-3 mb-0"><a href="" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h6>
							<div class="text-right text-muted fz12 mt-1">
							      16 de Enero de 2000
						    </div>
						</div>
					</div>
					<hr class="border-success">
					<div class="row elemento no-gutters">
						<div class="col-sm-5">
							<img src="https://via.placeholder.com/600x280" alt="" title="" class="w-100 mt-2">
						</div>
						<div class="col-sm-7">
							<h6 class="ml-3 mb-0"><a href="" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h6>
							<div class="text-right text-muted fz12 mt-1">
							      16 de Enero de 2000
						    </div>
						</div>
					</div>
					<hr class="border-success">
					<div class="row elemento no-gutters">
						<div class="col-sm-5">
							<img src="https://via.placeholder.com/600x280" alt="" title="" class="w-100 mt-2">
						</div>
						<div class="col-sm-7">
							<h6 class="ml-3 mb-0"><a href="" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h6>
							<div class="text-right text-muted fz12 mt-1">
							      16 de Enero de 2000
						    </div>
						</div>
					</div>
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
					<div class="row">
                        <div class="col-12 align-self-center">
                            <h6 class="text-center sinmargen">Gasto total del Gobierno Central (en millones de USD)</h6>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="mb-1 text-center fz12">
                                2017
                            </p>
                            <h6 class=" text-center">
                                USD 34.688
                            </h6>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="mb-1 text-center fz12">
                                2018
                            </p>
                            <h6 class=" text-center">
                                USD 34.853
                            </h6>
                        </div>
                    </div>
                    <hr class="border-success mt-1 mb-3">
                    <div class="row">
                        <div class="col-12 align-self-center">
                            <h6 class="text-center ">Ingreso total del Gobierno Central (en millones de USD)</h6>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="mb-1 text-center fz12">
                                2017
                            </p>
                            <h6 class=" text-center">
                                USD 34.688
                            </h6>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="mb-1 text-center fz12">
                                2018
                            </p>
                            <h6 class=" text-center">
                                USD 34.853
                            </h6>
                        </div>
                    </div>
                    <hr class="border-success mt-1 mb-3">
                    <div class="row">
                        <div class="col-12 align-self-center">
                            <h6 class="text-center ">Gasto en inversión (en millones de USD)</h6>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="mb-1 text-center fz12">
                                2017
                            </p>
                            <h6 class=" text-center">
                                USD 34.688
                            </h6>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="mb-1 text-center fz12">
                                2018
                            </p>
                            <h6 class=" text-center">
                                USD 34.853
                            </h6>
                        </div>
                    </div>
					<hr class="border-success mt-1 mb-3">
                    <div class="row">
                        <div class="col-12 align-self-center">
                            <h6 class="text-center ">Deuda agregada del Gobierno Central (% del PIB)</h6>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="mb-1 text-center fz12">
                                2017
                            </p>
                            <h6 class=" text-center">
                                USD 34.688
                            </h6>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="mb-1 text-center fz12">
                                2018
                            </p>
                            <h6 class=" text-center">
                                USD 34.853
                            </h6>
                        </div>
                    </div>
				</div>
			</div>
			<div class="col-sm-4">
				<!-- BEGIN SECCION LATERAL -->
				
				<article class="shadow p-3 rounded nuevoB">
					<div class="elemento">
						<div class="div-relative">
                            <h3 class="text-center blanco"><b>Nuestro Blog</b></h3>
                            <p class="text-center">Conoce los nuestras publicaciones y participaciones para mejorar la rendición de cuentas públicas y la calidad del gasto en nuestro país.</p>
                            <p class="text-center mt-3">
                                <a href="http://blog.gastopublico.org/" role="button" class="btn btn-light btn-sm">Ver detalles</a>
                            </p>
                        </div>
					</div>				
				</article>
				<article class="shadow p-3 mt-3 rounded naranjoB">
					<div class="elemento">
						<div class="div-relative">
                            <h3 class="text-center blanco"><b>Nuestro Blog</b></h3>
                            <p class="text-center">Conoce los nuestras publicaciones y participaciones para mejorar la rendición de cuentas públicas y la calidad del gasto en nuestro país.</p>
                            <p class="text-center mt-3">
                                <a href="http://blog.gastopublico.org/" role="button" class="btn btn-light btn-sm">Ver detalles</a>
                            </p>
                        </div>
					</div>				
				</article>
			</div>
			<div class="col-md-4 mb-3 mb-md-0">
				<div class="p-3 shadow bg-white rounded">
					<div class="col-12 mr-sm-3">
						<h1 class="titulo border-bottom border-info text-default mt-3 mt-sm-0 text-sm-left mb-3">Noticias Observatorio <small>ver más</small></h1>
						<div class="text-right text-muted fz12 mt-1 mb-2">Infórmate de nuestras actividades</div>
		    		</div>
					<!--  BEGIN CAROUSEL  -->
			      	<div id="casos-corrupcion" class="carousel slide" data-ride="carousel">
			      	  
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					    	<div class="row">
					    		<div class="col-sm-12">
					    			<img class="d-block img-fluid mx-auto img-corrupcion" src="https://via.placeholder.com/600x280" alt="First slide">
					    			<div class="text-right text-muted fz12 mt-3">16 de Enero de 2000</div>
					    			<h6 class="mt-3"><a href="" class="subtitulo">Teleamazonas recoge informe sobre compras públicas</a></h6>
					    			<div class="pb-3 text-justify text-muted">El Telégrafo recogió las cifras del informe sobre compras públicas dentro de un reportaje que habla sobre las medidas de austeridad que ha anunciado el Gobierno de Lenin Moreno.</div>
					    		</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					    	<div class="row no-gutters">
					    		<div class="col-12">
									<img class="d-block img-fluid mx-auto img-corrupcion" src="https://via.placeholder.com/600x280" alt="First slide">
					    			<div class="text-right text-muted fz12 mt-3">16 de Enero de 2000</div>
					    			<h6 class="mt-3"><a href="" class="subtitulo">Teleamazonas recoge informe sobre compras públicas</a></h6>
					    			<div class="pb-3 text-justify text-muted">El Telégrafo recogió las cifras del informe sobre compras públicas dentro de un reportaje que habla sobre las medidas de austeridad que ha anunciado el Gobierno de Lenin Moreno.</div>
					    		</div>
					    	</div>
					    </div>
					    <div class="carousel-item">
					      	<div class="row no-gutters">
					      		<div class="col-12">
									<img class="d-block img-fluid mx-auto img-corrupcion" src="https://via.placeholder.com/600x280" alt="First slide">
					    			<div class="text-right text-muted fz12 mt-3">16 de Enero de 2000</div>
					    			<h6 class="mt-3"><a href="" class="subtitulo">Teleamazonas recoge informe sobre compras públicas</a></h6>
					    			<div class="pb-3 text-justify text-muted">El Telégrafo recogió las cifras del informe sobre compras públicas dentro de un reportaje que habla sobre las medidas de austeridad que ha anunciado el Gobierno de Lenin Moreno.</div>
					    		</div>
					    	</div>
					    </div>
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
					    <li data-target="#casos-corrupcion" data-slide-to="0" class="active"></li>
					    <li data-target="#casos-corrupcion" data-slide-to="1"></li>
					    <li data-target="#casos-corrupcion" data-slide-to="2"></li>
					  </ol>
					</div>
		      	<!--  END CAROUSEL -->
		      </div>
			</div>
		</div>
	<!-- END SECCION CASOS DE CORRUPCION -->
</div>


	<!-- BEGIN SECCION PUBLICACIONES -->
		<div class="container mb-3">
			<div class="row pb-3 pt-3 shadow bg-white rounded">
				<div class="col-12">
					<h1 class="titulo border-bottom border-info text-default mb-3">Temas</h1>
					<div class="text-right text-muted fz12 mt-1 mb-2">Categorias principales de contenido.</div>
				</div>
				<div class="col-sm-12">
					<div class="lista-inline text-center flex">
                        
                            <a role="button" href="../Etiqueta?nombre=Gobierno%20Central" name="1" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">Gobierno Central</a>
                        
                            <a role="button" href="../Etiqueta?nombre=Regional" name="2" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">Provincial</a>
                        
                            <a role="button" href="../Etiqueta?nombre=Municipal" name="3" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">Municipal</a>
                        
                            <a role="button" href="../Etiqueta?nombre=Ley%20de%20Presupuesto" name="4" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">Presupuesto General del Estado</a>
                        
                            <a role="button" href="../Etiqueta?nombre=Personal%20del%20Estado" name="4" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">Personal del Estado</a>
                        
                            <a role="button" href="../Etiqueta?nombre=Calidad%20de%20Datos" name="4" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">Calidad de Datos</a>
                        
                            <a role="button" href="../Etiqueta?nombre=Transparencia" name="4" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">Transparencia</a>
                        
                            <a role="button" href="../Etiqueta?nombre=Rendición%20de%20Cuentas" name="4" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">Rendición de Cuentas</a>
                        
                            <a role="button" href="../Etiqueta?nombre=Compras%20Públicas" name="4" class="tags-Busqueda btn-light pt-3 pb-3 pr-5 pl-5 mr-3 d-inline-block mb-3">Compras Públicas</a>
                        
                    </ul>
				</div>
			</div>
		</div>
	<!-- END SECCION PUBLICACIONES -->	

</div>

<hr class="mt-5">

<!-- BEGIN FOOOTER -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4  align-self-center">
                    <p class="text-center">
                       <i class="fas fa-map-marker-alt text-info fz32 mb-3"></i><br>
                        <a href="https://goo.gl/maps/SJcvaSZwbXM2">
                            Eloy Alfaro y Seis de Diciembre, <br>
                            edificio Monasterio Plaza, oficina 1003<br>
                            Quito, Ecuador<br>
                        </a>
                    </p>
                </div>
                <div class="col-md-4  align-self-center">
                    <p class="text-center">
                        <i class="fas fa-envelope text-info fz32 mb-3"></i><br>
                            <a href="mailto:info@ciudadaniaydesarrollo.org">info@ciudadaniaydesarrollo.org</a>
                        <br>
                        <a href="tel:+5933332526">+593 3332526</a><br><br>
                    </p>
                </div>
                <div class="col-md-4  align-self-center">
                    <p class="text-center">
                        <i class="fab fa-creative-commons text-info fz32 mb-3"></i><br>
                        Esta obra de Observatorio Fiscal está bajo una <a target="_blank" href="https://creativecommons.org/licenses/by/4.0/">Licencia Creative Commons Atribución 4.0 Internacional.</a><br>
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

	
	<div class="row">
        <div class="col-md-12">
            <ul class="nav men-top justify-content-center">
                <li class="nav-item"><a class="nav-link" href="/home/creativecommons">Contenido Copyright</a></li>
                <li class="nav-item"><a class="nav-link" href="/home/Datasets">Datasets</a></li>
                <li class="nav-item"><a class="nav-link" href="/home/faq">FAQ</a></li>
            </ul>
        </div>
		<div class="col-12 text-center">
			<p class="text-secondary mt-3">Derechos Reservados &copy; {{ date('Y') }} - Observatorio del Gasto Público Ecuador</p>
		</div>
	</div>
</div>

<!-- END FOOTER -->



	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {!! Html::script('//code.jquery.com/jquery-3.3.1.min.js', ['type' => 'text/javascript', 'crossorigin' => 'anonymous']) !!}
    {!! Html::script('public/frontend/js/popper.min.js', ['type' => 'text/javascript', 'crossorigin' => 'anonymous']) !!}
    {!! Html::script('public/frontend/js/bootstrap.min.js', ['type' => 'text/javascript', 'crossorigin' => 'anonymous']) !!}
    {!! Html::script('public/frontend/js/Chart.min.js', ['type' => 'text/javascript', 'crossorigin' => 'anonymous']) !!}
    {!! Html::script('public/frontend/js/all.js', ['type' => 'text/javascript', 'crossorigin' => 'anonymous']) !!}
    {!! Html::script('public/frontend/js/custom.js', ['type' => 'text/javascript', 'crossorigin' => 'anonymous']) !!}
</body>
</html>