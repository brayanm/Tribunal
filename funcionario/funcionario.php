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
		<script type="text/javascript" src="../script.js"></script>
        
        <link rel="stylesheet" href="../css/styleTabla.css" />
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/animate-custom.css" />
        <link rel="stylesheet" type="text/css" href="../css/stylefuncionario.css" />
        <script>
        function seleccion(unidad) //Genera el contenido de los selec a partir de la entrada del modulo stylefuncionario
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
                    <span> Seccion Ejecutor </span> 
                </p>
                </h1>

        </header>
           <div id="div_saludo">
         <h1 style="font-family: 'Arial Narrow',Arial,sans-serif;"> Bienvenido <?php echo $_SESSION['nombre'] ?>, en este momento te encuentras en la sesion de ejecucion </h1>
             

        </div>
        <div id="comandos">
               <?php 
                if ($cargofuncionario < 3){
                   ?> 
               <input type="button" id="bextras" value="Iniciar Sesion como supervisor" onclick=location.href='../supervisor/supervisor.php';>   </input>
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
       
            <form name="formulario" action="inicio_actividad.php" method="POST">
                <label class="custom-select">
                <select id="actividades" name="actividades" required> 
                    </select>
            </label>

                <button type="submit" id="bextras" value="submit"> Comenzar actividad </button>
            </form>            

        </div>
          <header>
                <h1>Actividades pendientes </h1>  <button id="bunidades" onclick="JavaScript:mostrar()"> Mostrar/Ocultar</button>

        </header>

        <div id="botones2" name="botones2">
      
        
            <?php
            include "../php/conexion.php";
            $consulta = "SELECT * from vistaact WHERE rut = '$rutfuncionario' and modificable=0 order by Id_Actividad_Realizada desc" ;
           $query = mysql_query($consulta,$conexion);
         
    

            ?>

			<div id="wrapper">
            <table cellpadding="0" cellspacing="0" border="0" class="sortable" id="sorter">

             <tr> <th> Id-actividad </th> <th> Nombre actividad </th> <th class="nosort">    </th> </tr>
             <?php 
              while ($fila = mysql_fetch_array($query)) {
                    echo '<tr> <td>'. $fila['Id_Actividad_Realizada'].' </td> <td> '.$fila['nombre'].' </td> <td> 
                    
            <form name="form_act_realizada" action="actividad_realizada.php" method="POST">
                <input type="hidden" name="id_act_realizada" value="'. $fila['Id_Actividad_Realizada'].'"></input>

                <button type="submit" id="bextras" value="submit">Modificar o terminar</button>

            </form>  
              </td> </tr>';
                };
             
            mysql_close($conexion);
            ?>

            </table>
			</div>
			  <script type="text/javascript">
				var sorter=new table.sorter("sorter");
				sorter.init("sorter",1);
				</script>

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

