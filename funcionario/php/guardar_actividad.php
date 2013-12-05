<?php
 	include "../../php/conexion.php";

    session_start();
    if(isset($_SESSION['rut'])){
    $rutfuncionario = $_SESSION['rut']; 
    $nombrefuncionario = $_SESSION['nombre'];
    $cargofuncionario = $_SESSION['cargo'];
    }
    else {
        header('Location: ../index.php');
    }
    $actividad = $_POST['actividad'];
    $modificable=$_POST['boton'];
    //variables que obtengo del formulario id_actividad y los check de cada paso  de los pasos y su cantidad
    //modificable dejaremos por defecto 0
    //rit sera 123
    $consulta = "INSERT INTO actividad_realizada (Rut, Id_Actividad, Fecha, Modificable, Revisada, Mod_gestion, rit) VALUES ( $rutfuncionario, $actividad, date('Y-m-d') , $modificable ,'0' , '0','123' )";
 
   // 
   if( @mysql_query($consulta,$conexion)){
     $idactrealizada = mysql_insert_id();
     
     $consulta = "SELECT * from paso WHERE id_actividad = $actividad ";
     echo $idactrealizada;
     $query =mysql_query($consulta,$conexion);
     while ($fila = mysql_fetch_array($query)) {
        $idpaso = $fila['Id_pasos'];
        $nombrepaso =  $fila['Nombre'];
        $valorpaso = $_POST[$fila['Id_pasos'].'1'];
        if( @$_POST[$fila['Id_pasos'].'2']){
        $consulta2 ="INSERT INTO pasos_realizados(Id_Actividad_Realizada, id_paso, Nombre_Paso, Click_User, Valor_Paso, Observacion ) VALUES ( $idactrealizada ,
         $idpaso, '$nombrepaso' ,'1',$valorpaso,'nada' )";
        }
        else{
            $consulta2 ="INSERT INTO pasos_realizados(Id_Actividad_Realizada, id_paso, Nombre_Paso, Click_User, Valor_Paso, Observacion ) VALUES ( $idactrealizada ,
         $idpaso, '$nombrepaso' ,'0',$valorpaso,'nada' )";   
        }
     
        if (!@mysql_query($consulta2,$conexion))

            header( 'Location: ../../index.php');
           
        
    }
   }

    header( 'Location: ../funcionario.php');
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