<?php
	include"conexion.php";
	foreach($_POST as $nombre_campo => $valor){ 
   		$asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; 
  	 eval($asignacion); 
	} 
	$consulta= "SELECT * from usuarios where Nick ='".$username."' AND password ='".$password."'";
	
	$query = mysql_query($consulta,$conexion);

  	$row = mysql_num_rows($query);
  	if($row==1){
  		echo "bien";
  	}
  	else
  		echo "error";

  	mysql_close($conexion);

?>