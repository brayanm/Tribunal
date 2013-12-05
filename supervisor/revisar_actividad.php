 <?php 
 //cache
   
    session_start();
    if(isset($_SESSION['rut']) && $_SESSION['cargo'] < 3 ){
    $rutsupervisor = $_SESSION['rut']; 
    $nombrefuncionario = $_SESSION['nombre'];
    $cargofuncionario = $_SESSION['cargo'];
    $cargorevisar = $cargofuncionario+1;
    }
    else 
        header('Location: ../index.php');

     include "../php/conexion.php";
    $id_act_realizada = $_POST['id_act_realizada'];    
    $consulta ="UPDATE actividad_realizada set rut_supervisor = $rutsupervisor where Id_Actividad_Realizada = $id_act_realizada";
    mysql_query($consulta,$conexion);
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
           $consulta = "SELECT * from vistaact WHERE Id_Actividad_Realizada = ".$id_act_realizada;
           $query = mysql_query($consulta,$conexion);
            $fila = mysql_fetch_array($query);
            ?>
               <header>
                <h1>
                    <?php
           echo $fila['nombre'];
           ?>
       </h1>
     
        <div id="botones2">
        <table class="CSSTableGenerator" border="1">

         <tr> <td> Nombre Paso </td> <td> Veces Realizado </td> <td> Realizado por ejecutor </td> <td> Aprovacion Supervisor </td>  </tr>

         <form name="formulario" action="php/modificar_revision.php" method="POST">
            <input hidden="hidden" name="id_act_realizada" value= <?php echo $id_act_realizada ?> > </input>
          <?php  $consulta = "SELECT * from pasos_realizados WHERE Id_Actividad_Realizada = ".$id_act_realizada; 
          $query = mysql_query($consulta,$conexion);
          while ($fila = mysql_fetch_array($query)) {
          ?>

            <tr> 
                <td> <?php  echo $fila['Nombre_Paso']; ?>  </td>
                <td> <input type="number" readonly="readonly" value= <?php echo $fila['Valor_Paso']; ?> > </td>
                <?php

                if ($fila['Click_User']==1){
                    ?>
                <td>  <input type="checkbox" checked disabled="disabled" /> </td>
                <?php
                }
                else{
                    ?>
                    <td>  <input type="checkbox" disabled="disabled"/> </td>
                    <?php
                }

                ?>
                <?php

                if ($fila['Click_Jefe']==1){
                    ?>
                <td>  <input type="checkbox" name=<?php echo $fila['id_paso'].'1';?> checked /> </td>
                <?php
                }
                else{
                    ?>
                    <td>  <input type="checkbox"  name=<?php echo $fila['id_paso'].'1';?> /> </td>
                    <?php
                }


                ?>


        

            </tr>
          <?php
         } 
         mysql_close($conexion);
          ?>

        </table>
        <br>

        
            <button type="submit"  id="bextras" name="boton" value="0">Guardar</button>

            <button type="submit"  id="bextras" name="boton" value="1">Guardar y finalizar </button>
        
        </form>

            <input type="button"  id="bextras" value="Volver" onclick=location.href='supervisor.php';>   </input>

        </div>
    </div>
    </body>

    <footer>
    
    </footer>
    </html>

