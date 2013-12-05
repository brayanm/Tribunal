<?php
$nombre_actividad = $_POST['nombre'];
$unidad =$_POST['unidad'];
$cargo =$_POST['cargo'];
$consulta = "INSERT INTO actividad( Nombre, Id_Modulo, Id_cargo) VALUES ( '$nombre_actividad' , $unidad , $cargo )";
include"../../php/conexion.php";
 if(@mysql_query($consulta,$conexion)){
    echo "exito";
 }
$id_actividad = mysql_insert_id();
 mysql_close($conexion);
?>
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>TOPV</title>
        <script type="text/javascript" src="../../jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../../jquery.form.js"></script>
        <script>
        function Agregar_Paso(datos) //Genera el contenido de los selec a partir de la entrada del modulo se reciven datos del formulario
        {
            var nombre = datos.elements[0].value
            var valor = datos.elements[1].value
            var actividad = datos.elements[2].value
            $(Pasos_Agregados).load('agregar_paso.php?nombre='+nombre+'&valor='+valor+'&actividad='+actividad);
         }

        </script>
  
    </head>
    <body>
        <h2> Agregar pasos a actividad  <?php echo " ".$nombre_actividad ?></h2>

        <div id="Pasos_Agregados" name="Pasos_Agregados">
        </div>

        <div id="botones">
            <form form name="agre_pasos" action="JavaScript:Agregar_Paso(document.agre_pasos)">
                Nombre Paso : <input name="nombre" required>  </input> <br>
                Valor Paso : <input name="Valor" required>  </input> <br>
                <input name="actividad" required hidden="hidden" value=<?php echo $id_actividad ?> >  </input> <br>
                    <button type="submit" value="submit"> Agregar Paso </button>
            </form>
            
       
        </div>

     
    </body>

        <footer>
            pie de pagina
        </footer>
</html>