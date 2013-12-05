 <?php 
    session_start();
    if(isset($_SESSION['rut']) && $_SESSION['cargo'] < 3 ){
    $rutsupervisor = $_SESSION['rut']; 
    $nombrefuncionario = $_SESSION['nombre'];
    $cargofuncionario = $_SESSION['cargo'];
    $cargorevisar = $cargofuncionario+1;
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

        <script>
        function seleccion(unidad) //Genera el contenido de los selec a partir de la entrada del modulo
        {
            $("#actividades").load('php/cargar_actividades.php?modulo='+unidad);
         }
         function mostrar() //Genera el contenido de los selec a partir de la entrada del modulo stylefuncionario
        {
            $(botones2).toggle();
         }

        </script>

  
    </head>
    <body>
        
             <div class="container">
                 <header>
                <h1>Control de Trabajo <p> 
                    <span> Seccion Supervisor </span> 
                </p>
                </h1>

        </header>
              <div id="div_saludo">
         <h1 style="font-family: 'Arial Narrow',Arial,sans-serif;"> Bienvenido <?php echo $_SESSION['nombre'] ?>, en este momento te encuentras en la sesion de supervisor </h1>
             

        </div>
        <div id="comandos">
               <?php 
                if ($cargofuncionario < 3){
                   ?> 
               <input type="button" id="bextras" value="Iniciar Sesion como ejecutor" onclick=location.href='../funcionario/funcionario.php';>   </input>
               <?php
                }
                ?>
                <form name="form_cerrar"  action=<?php echo $_SERVER['PHP_SELF']; ?>   method="POST">
                      <input type="submit" id="bextras" name="cerrar_session" value="Cerrar sesion" /> 

              

            </form>
        </div>

        <div id="botones">
             <button id="bunidades" onclick="JavaScript:seleccion('1')">Unidad Administrativa General</button>
            <button id="bunidades"  onclick="JavaScript:seleccion('2')">Unidad Administrativa de Apoyo a Peritos y Testigo</button>
            <button id="bunidades" onclick="JavaScript:seleccion('3')">Unidad Administrativa de Atencion a Publico</button>
            <button id="bunidades" onclick="JavaScript:seleccion('4')">Unidad Administrativa de Causas</button>
            <button id="bunidades" onclick="JavaScript:seleccion('5')">Unidad Administrativa de Sala</button>
            <button id="bunidades" onclick="JavaScript:seleccion('6')">Unidad Administrativa de Servicio</button>
       
                  <header>
                <h1>
                    <span> Actividades para revisar </span> 
                
                </h1>

                </header>
       
      
                        <div id="actividades" name="actividades"> 

                        </div>


        </div>
         <header>
                
                <h1>Actividades pendientes <p> 
                    <span> para revision </span> 
                </p>
                </h1>
        </header>
        <button id="bunidades" onclick="JavaScript:mostrar()"> Mostrar/Ocultar</button>


        <div id="botones2">

            <br/>
            <?php
            include "../php/conexion.php";
            $consulta = "SELECT * from vistaact WHERE rut_supervisor = $rutsupervisor and Revisada=0 order by Id_Actividad_Realizada desc" ;
    
            ?>
            
          <table class="CSSTableGenerator" border="1">
    <tr> <td> Id Actividad </td><td> Nombre Actividad </td> <td> Fecha de realizacion </td> <td> Nombre funcionario </td> <td> </td> </tr>
    <?php

    $query = mysql_query($consulta,$conexion);
    while ($fila = mysql_fetch_array($query)) {
    ?>
    <tr> <td> <?php echo $fila['Id_Actividad_Realizada'] ?> </td> <td> <?php echo $fila['nombre'] ?> </td> <td> <?php echo $fila['fecha'] ?> </td> <td> <?php echo $fila['Nombrejec'] ?></td>
    <!-- Segmento del formulario en la tabla de busqueda -->
     <td> 
        <form name="form_act_revisar" action="revisar_actividad.php" method="POST">
                <input type="hidden" name="id_act_realizada" value=<?php echo $fila['Id_Actividad_Realizada'] ?> ></input>
                <input type="hidden" name="rut_super" value=<?php echo $rutsupervisor ?> ></input>

                <button   id="bextras"  type="submit" value="submit"> Supervisar </button>

            </form>  

     </td> 

 </tr>
             <?php
         }
            mysql_close($conexion);
            ?>

          

        </div>
              </div>
          </body>
 
        <footer>
       
        </footer>
          <?php
        if(isset($_POST['cerrar_session'])){
            session_destroy();
            header("Location:funcionario.php");
        }
            ?>
</html>
