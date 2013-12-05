<?php
 	include "../../php/conexion.php";
    $id_act_realizada = $_POST['id_act_realizada'];    
    $revisada=$_POST['boton'];


    $consulta ="UPDATE actividad_realizada set Revisada = $revisada where Id_Actividad_Realizada = $id_act_realizada";
    mysql_query($consulta,$conexion);
     $consulta = "SELECT * from pasos_realizados WHERE Id_Actividad_Realizada = $id_act_realizada ";
     $query =mysql_query($consulta,$conexion);
     while ($fila = mysql_fetch_array($query)) {
        $idpaso = $fila['id_paso'];
        if( @$_POST[$fila['id_paso'].'1']){
        $consulta2 ="UPDATE pasos_realizados SET  Click_Jefe = 1 WHERE Id_Actividad_Realizada = $id_act_realizada  and id_paso=$idpaso";
        }
        else{
        $consulta2 ="UPDATE pasos_realizados SET  Click_Jefe = 0 WHERE Id_Actividad_Realizada = $id_act_realizada  and id_paso=$idpaso "; 
        }
     
        if(@mysql_query($consulta2,$conexion)){
            //bien ejecutado
        }
        	
        else
            header('Location: ../error.php');
           
        
    
   }

 	mysql_close($conexion);
    header('Location: ../supervisor.php');
?>