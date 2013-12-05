<table border="1">
<tr> <td> Nombre Paso </td> <td> Valor Paso  </td> </tr>
<?php
	$nombre = $_GET['nombre'];
	$valor =  $_GET['valor'];
	$id_actividad =$_GET['actividad'];
	$consulta= " INSERT INTO paso( Nombre, valor, id_actividad) VALUES ('$nombre' , $valor , $id_actividad)";
	include "../../php/conexion.php";
	mysql_query($consulta,$conexion);
    $consulta = "SELECT * from paso WHERE id_actividad =  $id_actividad" ;
    $query = mysql_query($consulta,$conexion);
    while ($fila = mysql_fetch_array($query)) {
    ?>
     <tr> <td> <?php echo $fila['Nombre'] ?> </td> <td> <?php echo $fila['valor'] ?> </td>  </tr>
     <?php
     }
 	mysql_close($conexion);
 	?>

</table>