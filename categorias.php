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
			 
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<p>
						Las aves son animales vertebrados, de sangre caliente, que caminan, saltan o se mantienen solo sobre las extremidades posteriores, mientras que las extremidades anteriores están modificadas como alas que, al igual que muchas otras características anatómicas únicas, son adaptaciones para volar, aunque no todas vuelan. Tienen el cuerpo recubierto de plumas y, las aves actuales, un pico córneo sin dientes. Para reproducirse ponen huevos, que incuban hasta su eclosión.
					</p>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<a href = "#" class = "thumbnail">
						<img src = "img/6.jpg"  class = "img-responsive" style="height:100px;">
					</a>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione ab qui laudantium dolor, sit doloremque aliquid earum nesciunt vero ullam commodi, blanditiis numquam natus libero repellat odit cum, ipsa nostrum!
					</p>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<a href = "#" class = "thumbnail">				
						<img src = "img/7.jpg" alt = "imgs" class = "img-responsive" style="height:100px;">
					</a>
				</div>		
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione ab qui laudantium dolor, sit doloremque aliquid earum nesciunt vero ullam commodi, blanditiis numquam natus libero repellat odit cum, ipsa nostrum!
					</p>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<a href = "#" class = "thumbnail">				
						<img src = "img/7.jpg" alt = "imgs" class = "img-responsive" style="height:100px;">
					</a>
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