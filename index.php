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
				      include("partials/menu.html");
				    ?>
				</div>

		    </div>
		    
		</header>
		
		<div class="container top10">
			
			<div class="main row">
				<!-- CARRUCEL DE IMAGENES [ ] [ ][ ] -->
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
			        <?php
				      include("partials/carousel.html");
				    ?>
				</article>    
			</div>
			
			<!-- FILAS DE CONTENIDO -->
			<div class="row top10">
				<?php 
			      include("partials/contenido.php");
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
		$('#myCarousel').carousel({
		    interval: 5200
		});
		</script>;
	</body>
</html>