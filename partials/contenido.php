<?php    
				    
	$query  = "SELECT texto, att1, att2, att3, estado FROM CONTENIDOS WHERE "; //query contenidos
	$query .= "seccion = 'home' and estado = 1 and att2 IN(1,2,3,4)";
	
    $count  = "SELECT COUNT(*) AS cuenta FROM contenidos ";
    $count .= "WHERE seccion = 'home' AND tipo_campo ='conte' AND att1 = 'r1' AND estado = '1'";

	
			$resultado_query = mysql_query($query,$con); //ejecuta y asigna
			$count          = mysql_query($count,$con);
			
			
			while ($row = mysql_fetch_array($count)){
				$cuenta = $row["cuenta"];
			}
			switch ($cuenta) {
				case 4:
					$tamanos = " col-xs-12 col-sm-6 col-md-3\">";
					break;
				case 3:
					$tamanos = " col-xs-12 col-sm-6 col-md-4\">";
					break;
				case 2:
					$tamanos = " col-xs-12 col-sm-6 col-md-6\">";
					break;
				case 1:
					$tamanos = " col-xs-12 col-sm-6 col-md-12\">";
					break;
				default:
					$tamanos = " col-xs-12 col-sm-6 col-md-3\">";
					break;
			}
?>

<?php while ($row = mysql_fetch_array($resultado_query)) { 
	$texto = $row["texto"];
	$color = $row["att3"];
    
	
	echo "<div class=\"".$color.$tamanos;
		echo "<p>";	
		    	echo $texto; 		
		echo "</p>";
	echo "</div>";
	
}
?>