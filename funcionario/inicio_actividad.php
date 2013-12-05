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
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>TOPV</title>
        <script type="text/javascript" src="../jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../jquery.form.js"></script>


        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/animate-custom.css" />
        <link rel="stylesheet" type="text/css" href="../css/stylefuncionario.css" />

    </head>
    <body>
           <div class="container">

        
            <?php
            include "../php/conexion.php";
            $id_act = $_POST['actividades'];
           $consulta = "SELECT * from actividad WHERE id_actividad = ".$id_act;
           $query = mysql_query($consulta,$conexion);
            $fila = mysql_fetch_array($query);
            ?>
               <header>
                <h1>
                    <?php
           echo $fila['Nombre'];
           ?>
       </h1>
    

            
      
        <div  id="botones2" >

            En esta seccion debe marcar los pasos realizados en la seccion "realizado", como ademas la cantidad que fue necesario realizar dicho paso.
            <br>
            <br>
            <form id="tabla" name="formulario" action="php/guardar_actividad.php" method="POST">

            <table  class="CSSTableGenerator" border="1">
                
                <tr> <td> Nombre Paso </td> <td> Cantidad </td> <td> realizado </td> </tr>
           <?php
            $consulta = "SELECT * from paso WHERE id_actividad = ".$id_act;
            $query = mysql_query($consulta,$conexion);
            while ($fila = mysql_fetch_array($query)) {
                ?>
            <tr> 
                <td> <?php  echo $fila['Nombre']; ?>  </td>

                <td> <input type="number" name=<?php echo $fila['Id_pasos'].'1';?>  value="1" required  /> </td>
                <td>  <input type="checkbox" name=<?php echo $fila['Id_pasos'].'2';?> /> </td>

        

            </tr>
           <?php
            }         

           ?> 
            <input hidden value=<?php echo $id_act; ?> name="actividad" />
             </table>
               <br>
              
            <button type="submit" id="bextras"  name="boton" value="0">Guardar</button>

            <button type="submit" id="bextras"  name="boton" value="1">Guardar y finalizar </button>
            </form>

            <input type="button"  id="bextras" value="Volver" onclick=location.href='funcionario.php';>   </input>

      


        </div>
    </div>

 <footer>
 
 </footer>

