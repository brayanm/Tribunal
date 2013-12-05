<?php

   //cache rut

    session_start();
     if(isset($_SESSION['rut']) && $_SESSION['cargo'] < 3 ){
    $rutsupervisor = $_SESSION['rut']; 
    $nombrefuncionario = $_SESSION['nombre'];
    $cargofuncionario = $_SESSION['cargo'];
    $cargorevisar = $cargofuncionario+1;
    }
    else 
        header('Location: ../index.php');

 	include "../../php/conexion.php";
 
    $consulta = "SELECT * from vistaact WHERE Id_Modulo = ".$_GET['modulo']." AND Modificable = '1' and Id_cargo = $cargorevisar and Revisada = '0' and rut_supervisor is NULL"   ;
    ?>
    <table class="CSSTableGenerator" border="1">
    <tr> <td> Nombre Actividad </td> <td> Fecha de realizacion </td> <td> Nombre funcionario </td> <td> </td> </tr>
    <?php

    $query = mysql_query($consulta,$conexion);
    while ($fila = mysql_fetch_array($query)) {
    ?>
    <tr> <td> <?php echo $fila['nombre'] ?> </td> <td> <?php echo $fila['fecha'] ?> </td> <td> <?php echo $fila['Nombrejec'] ?></td>
    <!-- Segmento del formulario en la tabla de busqueda -->
     <td> 
     	<form name="form_act_revisar" action="revisar_actividad.php" method="POST">
                <input type="hidden" name="id_act_realizada" value=<?php echo $fila['Id_Actividad_Realizada'] ?> ></input>
                <input type="hidden" name="rut_super" value=<?php echo $rutsupervisor ?> ></input>

                <button  id="bextras"  type="submit" value="submit"> Supervisar </button>

            </form>  

     </td> 

 </tr>
    <?php

    };
    ?>
    
    <?php
 
 	mysql_close($conexion);

?>
</table>
