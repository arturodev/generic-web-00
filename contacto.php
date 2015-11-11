<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Estilis boostrap</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="fonts.css">		
	</head>
	
	<body>
		
		<header>
			<div class="container">
				
				<h1>Nodriza Estudio</h1>
				<h3>La opcion correcta en produccion musical</h3>
			    <!-- MENU DE NAVEGACION -->
				<div class="visible-xs visible-lg visible-md visible-sm">
					<?php 
				      include("partials/menu.html");
				    ?>
				</div>

		    </div>
		    
		</header>
		
		<div class="container top10">
			
			<div class="main row">

                    <iframe class="col-xs-12 col-sm-8 col-md-9 col-lg-9" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1271.0199313216863!2d-100.37516351136597!3d25.704846173701394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1447113291507" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
		
		
			<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				<p>
					<h3>Nuestars Sucursales</h3>

					Paseo de la cordillers</br>
					Numero: 4543</br>
					Monterrey Nuevo Leon</br>
					Tel: 82848284
				</p>
				<p>
					Paseo de la cordillers</br>
					Numero: 4543</br>
					Monterrey Nuevo Leon</br>
					Tel: 88651111
				</p>
			</aside>
				</article>    
			</div>
			
			<!-- FILAS DE CONTENIDO -->
			<div class="row top10">
				<div class="col-md-4">
					
						<div class = "panel-heading">Conactanos</div>
						<form action="" method="post">
							
							 <div class="form-group">
								 <label for="nombre" data-toggle="tooltip" title="Dejanos conocerte">Nombre:</label>
								 <input class="form-control" id="nombre" type="text" placeholder ="nombre:">
							 </div>
							 
							 <div class="form-group">
							 	 <div calss="input-group">
							         <label for="nombre" data-toggle="tooltip" title="Escribe tu correo para poder contactarte">Correo:</label>
									 <input type="text" class ="form-control">
							 	 </div>
							 </div>
							 
							 <div class="form-group">
								 <label for="nombre" data-toggle="tooltip" title="Selecciona tu estado">Elije una opcion:</label>
								 <select class = "" name = "" id="options">
								 	<option value="">Nuevo Leon</option>
								 	<option value="">Coahuila</option>
								 	<option value="">Chihuahua</option>
								 	<option value="">Tamaulipas</option>
								 	<option value="">Sonora</option>
								 </select>
							 </div>
							 
							 <div class="form-group">
							 	<label for="nombre" data-toggle="tooltip" title="Escribenos tus comentarios dudas y o solicitudes">Mensaje:</label>
							 	<textarea class="form-control" id="mensaje" placeholder="Escribe tu mensaje:"></textarea>
							 </div>
							 
							 <button class="btn btn-primary">Enviar</button>
						</form>
					</div>
			</div>
			
		</div>
	
		<footer>
        	<div class="footer container-fluid top10">
        		<?php 
			      include("partials/footer.php");
			    ?>
        	</div>
		</footer>
		</div>
	
		<!-- Latest compiled and minified JavaScript -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
		$(document).ready(function(){
			
			$('#myCarousel').carousel({
			    interval: 5200
			});
		

		
		    $('[data-toggle="tooltip"]').tooltip();   
		});

		
		</script>;
	</body>
</html>