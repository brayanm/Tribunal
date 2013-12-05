<?php
foreach($_POST as $nombre_campo => $valor){ 
   $asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; 
   eval($asignacion); 
} 
include"../../php/conexion.php";
//(Rut, Nombre, ApPaterno, ApMaterno, Nick, Password, cargo) 
 $consulta = "INSERT INTO usuarios(Rut, Nombre, ApPaterno, ApMaterno, Nick, Password, cargo)   VALUES ($rut,'$nombre','$apaterno','$amaterno','$nick','$password',$cargo)" ;
 if(@mysql_query($consulta,$conexion)){
 	echo "exito";
 }
 mysql_close($conexion);

?>