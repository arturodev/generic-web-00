<?php
  $con = mysql_connect("localhost","ar_user00","lachucha");
    if (!$con){
      die('No se pudo conectar: ' . mysql_error());
    }
  mysql_select_db("ar_generic_db", $con);
  mysql_set_charset('utf8', $con);
?>