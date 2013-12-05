
 <?php 
    session_start();
    if(isset($_SESSION['rut'])){
    $rutfuncionario = $_SESSION['rut']; 
    $nombrefuncionario = $_SESSION['nombre'];
    $cargofuncionario = $_SESSION['cargo'];
    }
    else 
        header('Location: ../index.php');
 ?>
    
<?php
 	include "../../php/conexion.php";
 
    $consulta = "SELECT * from actividad WHERE id_modulo = ".$_GET['modulo']." AND Id_cargo = '$cargofuncionario' ";
    $query = mysql_query($consulta,$conexion);

    while ($fila = mysql_fetch_array($query)) {

        echo '<option value='.$fila['Id_Actividad'].'>'.$fila['Nombre'].'</option>';
    };
 
 	mysql_close($conexion);
?>