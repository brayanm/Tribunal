<?php
$id_act_realizada = $_POST['id_act_realizada'];
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
    <body> <div class="container">
         <?php
            include "../php/conexion.php";
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
    

        <div id="titulo" name="titulo">
            <?php
           $consulta = "SELECT * from pasos_realizados WHERE Id_Actividad_Realizada = ".$id_act_realizada;
           $query = mysql_query($consulta,$conexion);
            ?>
        </div>
        <div id="botones2">
            En esta seccion puede modificar sus actividad comenzadas.
            <br><br>
            <form name="formulario" id="tabla" action="php/modificar_actividad.php" method="POST">

            <table class="CSSTableGenerator" border="1">
                
                <tr> <td> Nombre Actividad </td> <td> Cantidad </td> <td> realizado </td> </tr>
           <?php
            while ($fila = mysql_fetch_array($query)) {
                ?>
            <tr> 
                <td> <?php  echo $fila['Nombre_Paso']; ?>  </td>
                <td> <input type="number" name=<?php echo $fila['id_paso'].'1';?>  value= <?php echo $fila['Valor_Paso'] ;?> > </td>
                <?php

                if ($fila['Click_User']==1){
                	?>
                <td>  <input type="checkbox" checked name=<?php echo $fila['id_paso'].'2';?> /> </td>
            	<?php
            	}
            	else{
            		?>
                	<td>  <input type="checkbox"  name=<?php echo $fila['id_paso'].'2';?> /> </td>
                	<?php
                }

                ?>

        

            </tr>
           <?php
            }         

           ?> 
            <input hidden value=<?php echo $id_act_realizada; ?> name="actividad" />
             </table> 
             <br>
            <button type="submit" id="bextras" name="boton" value="0">Guardar</button>

            <button type="submit" id="bextras" name="boton" value="1">Guardar y finalizar </button>

            </form>
            
            <input type="button" id="bextras"value="Volver" onclick=location.href='funcionario.php';>   </input>
      


        </div>
    </div>
</body>

 <footer>

 </footer>

