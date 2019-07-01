<?php 
	include_once 'header.php';	
?>

<div class="container mt-3">

	<!-- BEGIN SECCION SLIDER PUBLLLICACIONES -->
		<div class="row mt-3">
			<div class="col-sm-12">
				<div class="titulo border-bottom border-success text-default text-uppercase">Publicaciones</div>
				<div class="text-muted fz14 mt-3 mb-2">Revisa nuestros análisis e interpretaciones del comportamiento del gasto público.
				<p class="mt-3">Explora diversas publicaciones que hemos desarrollado con el objeto de identificar hallazgos interesantes y que sirven para el debate de una mejor transparencia y rendición de cuentas del gasto público. Aquí podrás hallar variadas modalidades para revisar nuestros análisis: columnas, reportajes, informes y estudios.
				</p></div>
			</div>
		</div>


	<!-- END SECCION SLIDER PUBLLLICACIONES -->

	<div class="row mt-3">
	<!-- BEGIN SECCION LATERAL -->
		<div class="col-sm-3">
			<!-- BEGIN lo mas reciente -->
			<h5 class="celeste mt-3"><i class="fas fa-caret-square-right"></i> Tipo o Categorías</h5>
			<select class="form-control form-control-sm" id="orden-TipoPublicacion" name="orden-TipoPublicacion">
				<option value="">Todas</option>
				<option value="1">Columnas</option>
				<option value="2">Estudios</option>
				<option value="3">Infografías</option>
				<option value="4">Informes</option>
				<option value="5">Principios</option>
				<option value="6">Reportajes</option>
			</select>

			<h5 class="celeste mt-3"><i class="fas fa-caret-square-right"></i> Temas o Tags</h5>
			<div class="compartir shadow p-3 mb-4 bg-white rounded">
				<div class="elemento mt-3">
					<a role="button" href="../Etiqueta?nombre=Gobierno%20Central" name="1" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Gobierno Central</a>
                        
                    <a role="button" href="../Etiqueta?nombre=Regional" name="2" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Provincial</a>
                
                    <a role="button" href="../Etiqueta?nombre=Municipal" name="3" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Municipal</a>
                
                    <a role="button" href="../Etiqueta?nombre=Ley%20de%20Presupuesto" name="4" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Presupuesto General del Estado</a>
                
                    <a role="button" href="../Etiqueta?nombre=Personal%20del%20Estado" name="4" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Personal del Estado</a>
                
                    <a role="button" href="../Etiqueta?nombre=Calidad%20de%20Datos" name="4" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Calidad de Datos</a>
                
                    <a role="button" href="../Etiqueta?nombre=Transparencia" name="4" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Transparencia</a>
                
                    <a role="button" href="../Etiqueta?nombre=Rendición%20de%20Cuentas" name="4" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Rendición de Cuentas</a>
                
                    <a role="button" href="../Etiqueta?nombre=Compras%20Públicas" name="4" class="tags-Busqueda btn-light pt-2 pb-2 pr-3 pl-3 d-block mb-3">Compras Públicas</a>
					
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
						<div class="col-sm-5 d-flex align-items-center">
							<img class="d-block w-100" src="https://via.placeholder.com/600x280" alt="Publicacion1">
						</div>
						<div class="col-sm-7">							
							<h3 class="subtitulo">El alto costo de la burocracia en Ecuador</h3>
							<span class="d-block text-right fz12 mb-3">Gobierno Central | 16 de enero 2019</span>
							<p class="text-justify text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. El alto costo de la burocracia en Ecuador. Fusce venenatis odio non condimentum pulvinar. Donec facilisis enim gravida lectus pretium egestas. Aenean tempus lectus ut risus suscipit, tempus vestibulum</p>
							<a href="" role="button" class="btn btn-success btn-sm float-right">Ir a la publicación</a>
						</div>
					</div>
				</div>
				<div class="col-12 mb-3 border-bottom border-success pb-3">
					<div class="row">
						<div class="col-sm-5 d-flex align-items-center">
							<img class="d-block w-100" src="https://via.placeholder.com/600x280" alt="Publicacion1">
						</div>
						<div class="col-sm-7">
							<h3 class="subtitulo">El alto costo de la burocracia en Ecuador</h3>
							<span class="d-block text-right fz12 mb-3">Gobierno Central | 16 de enero 2019</span>
							<p class="text-justify text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis dolor ac nibh sollicitudin faucibus. Fusce venenatis odio non condimentum pulvinar. Donec facilisis enim gravida lectus pretium egestas. Aenean tempus lectus ut risus suscipit, tempus vestibulum</p>
							<a href="" role="button" class="btn btn-success btn-sm float-right">Ir a la publicación</a>
						</div>
					</div>
				</div>
				<div class="col-12">
					<nav aria-label="Page">
					  <ul class="pagination justify-content-center">
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					        <span class="sr-only">Previous</span>
					      </a>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					        <span class="sr-only">Next</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>


		</div>
	</div>
</div>

<?php 
	include_once 'footer.php';
?>