<?php 
  include("partials/_header.php");
  include("includes/conection.php");
?>
	<body>
		
		<header>
			<div class="container">
				
				<h1>Nodriza Estudio</h1>
				<h3>La opcion correcta en produccion musical</h3>
			    <!-- MENU DE NAVEGACION -->
				<div class="visible-xs visible-lg visible-md visible-sm">
					<?php 
				      include("partials/admon/menu_adm.php");
				    ?>
				</div>

		    </div>
		    
		</header>
		
		<div class="container top10">
			<div class="row top10">
				<div class="col-md-6">
					
					<div class = "panel-heading">Editar imagenes de carrousel</div>	
			       
						<form class="form-inline" action="funciones/uploader.php" method="post" enctype="multipart/form-data" role = "form">
							
							<div class="form-group">
							    <label for="nombre" data-toggle="tooltip" title="Dejanos conocerte">Archivo:</label>
							</div>
							
							<div class="form-group">
							    <input name="file" type="file"> 
							    <span id="image"></span> 
						    </div>
						    <input type="hidden" name="posicion_name" value="1">
						    <div class="form-group">
						    	<img src = "img/1.jpg"  class = "img-responsive" style="height:80px;">
						    </div>
						    
						    <div class="form-group">
						    	<button class="btn btn-primary" name="submit" type="submit" value="Upload!">Subir</button>
						    </div> 
						    
						</form>
					
					
					
				</div>   
	      	</div> 
		</div>
			
			<!-- FILAS DE CONTENIDO -->
			<div class="row top10">
				<?php 
			      
			    ?>
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
		    $('[data-toggle="tooltip"]').tooltip();
	
		</script>
	</body>
</html>