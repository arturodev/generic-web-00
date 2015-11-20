<?php 
  include("partials/_header.php");
  include("includes/conection.php");
?>
	<body>
		
		<header>
			<div class="container">
				
				<h1 data-target="#myModal_titulo">Nodriza Estudio</h1>
				<button  data-toggle="modal" data-target="#myModal_titulo" class="btn btn-primary" name="submit" type="button" value="Upload!" onclick="cambiar_img(3)">Cambiar</button>
				<h3>La opcion correcta en produccion musical</h3>
			    <!-- MENU DE NAVEGACION -->
				<div class="visible-xs visible-lg visible-md visible-sm">
					<?php 
				      include("partials/admon/menu_adm.php");
				    ?>
				</div>

		    </div>
		    
		</header>
		<!-- Cambiar imagenes-->
		<div class="container top10">
			<div class="row top10">
				<div class="col-md-6">
					<div class = "panel-heading">Editar imagenes de carrousel</div>	
						<form class="form-inline">
							<div class="form-group">
							<img src = "img/1.jpg"  class = "img-responsive" style="height:80px;">
							</div>   
							<button  data-toggle="modal" data-target="#myModal_img_car" class="btn btn-primary" name="submit" type="button" value="Upload!" onclick="cambiar_img(1)">Cambiar</button>
						</form>
						<form class="form-inline">
							<div class="form-group">
							<img src = "img/2.jpg"  class = "img-responsive" style="height:80px;">
							</div>   
							<button  data-toggle="modal" data-target="#myModal_img_car" class="btn btn-primary" name="submit" type="button" value="Upload!" onclick="cambiar_img(2)">Cambiar</button>
						</form>
						<form class="form-inline">
							<div class="form-group">
							<img src = "img/3.jpg"  class = "img-responsive" style="height:80px;">
							</div>   
							<button  data-toggle="modal" data-target="#myModal_img_car" class="btn btn-primary" name="submit" type="button" value="Upload!" onclick="cambiar_img(3)">Cambiar</button>
						</form>


						<!-- Modal cambiar imagenes-->
							<?php 
						      include("partials/admon/modls/modal_cambia_image.php");
						    ?>
						 <!-- Modal cambiar textos -->
						   	<?php 
						      include("partials/admon/modls/modal_cambia_textos.php");
						    ?>												
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
		
		<script> $('[data-toggle="tooltip"]').tooltip(); </script>
		
		<script>
			 function cambiar_img (cuales) {	
			  document.getElementById('matrix').src = "img/"+cuales+".jpg";
			  document.getElementById("hidenf").value = cuales;
			 }
		</script>
	

	
		
	</body>
</html>
