<?php
 	include "../../php/conexion.php";
    session_start();
    if(isset($_SESSION['rut'])){
    $rut = $_SESSION['rut']; 
    $nombrefuncionario = $_SESSION['nombre'];
    $cargofuncionario = $_SESSION['cargo'];
    }
    else {
        header('Location: ../index.php');
    }
    $actividad = $_POST['actividad'];    
    $modificable=$_POST['boton'];

    $consulta ="UPDATE actividad_realizada set modificable = $modificable where Id_Actividad_Realizada = $actividad";
    mysql_query($consulta,$conexion);
     $consulta = "SELECT * from pasos_realizados WHERE Id_Actividad_Realizada = $actividad ";
     $query =mysql_query($consulta,$conexion);
     while ($fila = mysql_fetch_array($query)) {
        $idpaso = $fila['id_paso'];
        $valorpaso = $_POST[$fila['id_paso'].'1'];
        if( @$_POST[$fila['id_paso'].'2']){
        $consulta2 ="UPDATE pasos_realizados SET Valor_Paso=$valorpaso , Click_User = 1 WHERE Id_Actividad_Realizada = $actividad  and id_paso=$idpaso";
        }
        else{
        $consulta2 ="UPDATE pasos_realizados SET Valor_Paso=$valorpaso , Click_User = 0 WHERE Id_Actividad_Realizada = $actividad  and id_paso=$idpaso "; 
        }
     
        if(@mysql_query($consulta2,$conexion))
        	header( 'Location: ../funcionario.php');
           
        
    
   }
/*
    
            if( @$_POST[$fila['Id_pasos'].'2']){
            	echo 1;
            }
            else {
            	echo 0;
            }
            echo '<br />';
    }; */
 
 	mysql_close($conexion);
?>