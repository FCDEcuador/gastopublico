<?php 
	include_once 'header.php';	
?>

<div class="container mt-3">

	<!-- BEGIN SECCION BUSCAR -->
		<div class="row mt-3 p-3 bg-light">
			<div class="col-6">
				<div class="titulo border-bottom border-info text-info text-uppercase">Contacto</div>
			</div>
			<div class="col-12 mt-3">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7971252446946!2d-78.48202418524664!3d-0.1867578998637365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwMTEnMTIuMyJTIDc4wrAyOCc0Ny40Ilc!5e0!3m2!1sen!2sec!4v1550254701839" class="w-100" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>


		<div class="row p-3 justify-content-center">
			<div class="col-sm-6">
				<div class="mb-3"><i class="fas fa-phone text-info fz24 mr-3"></i>+593 3332526</div>
				<div class="mb-3"> <i class="fas fa-envelope text-info fz24 mr-3"></i>info@ciudadaniaydesarrollo.org</div>
				<div class="mb-3"><i class="fas fa-map-marker-alt text-info fz24 mr-3"></i>Eloy Alfaro y 6 de Diciembre, edificio Monasterio Plaza, oficina 1003, Quito - Ecuador</div>
			</div>
		</div>

		<div class="row p-3">
			<div class="col-12 ">
				<form>
				  <div class="form-group row justify-content-center">
				    <label for="termino" class="col-sm-2 col-form-label text-uppercase text-sm-right text-secondary">Nombre</label>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" id="termino" name="termino" required>
				    </div>
				  </div>
				  <div class="form-group row justify-content-center">
				    <label for="email" class="col-sm-2 col-form-label text-uppercase text-sm-right text-secondary">Email</label>
				    <div class="col-sm-4">
				      <input type="email" class="form-control" id="email" name="email" required>
				    </div>
				  </div>
				  <div class="form-group row justify-content-center">
				    <label for="termino" class="col-sm-2 col-form-label text-uppercase text-sm-right text-secondary">Asunto</label>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" id="asunto" name="asunto" required>
				    </div>
				  </div>
				  <div class="form-group row justify-content-center">
				    <label for="mensaje" class="col-sm-2 col-form-label text-uppercase text-sm-right text-secondary">Mensaje</label>
				    <div class="col-sm-4">
				      <textarea type="mensaje" class="form-control" id="mensaje" name="mensaje"></textarea>
				    </div>
				  </div>
				  <div class="align-self-center d-flex justify-content-center">
				  	<button type="submit" class="btn btn-info btn-sm">Enviar</button>
				  </div>
				</form>
			</div>
		</div>
	<!-- END SECCION BUSCAR -->
		<div class="row p-3 justify-content-center">
			<div class="col-sm-6">
				<p class="text-center">Síguenos en nuestras redes sociales:</p>
			</div>
		</div>

		<div class="row p-3 justify-content-center">
			<div class="col-8 col-sm-3">
				<div class="border-left borazul">
					<a href="https://www.facebook.com/EsMiPlataEC/" class="text-secondary mt-3 pl-3"><span class="pr-3"><i class="fab fa-facebook-f"></i> EsMiPlataEC</span></a><br>
					<a href="https://twitter.com/EsMiPlataEC" class="text-secondary mt-3 pl-3"><span class="pr-3"><i class="fab fa-twitter"></i> @EsMiPlataEC</span></a><br>
				</div>
			</div>
		</div>

	
</div>

<?php 
	include_once 'footer.php';
?>