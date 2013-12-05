 <?php 
    $rutfuncionario ="32165423"; 
 ?>

 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>TOPV</title>
        <script type="text/javascript" src="../jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../jquery.form.js"></script>
        <script>
        function Agregar_funcionario() //Genera el contenido de los selec a partir de la entrada del modulo
        {
            $(Rboton).load('php/agregar_funcionario.php');
         }

        function Agregar_Actividad() //Genera el contenido de los selec a partir de la entrada del modulo
        {
            $(Rboton).load('php/agregar_Actividad.php');
         }

        </script>
  
    </head>
    <body>
        <div id="botones">
            <button onclick="JavaScript:Agregar_funcionario()" >Agregar Funcionario</button>
            <button onclick="JavaScript:Agregar_Actividad()">Agregar Actividad</button>
            <button onclick="JavaScript:seleccion('3')">Generar Excel</button>
        </div>
        <div id="Rboton">

        </div>

     
    </body>

        <footer>
            pie de pagina
        </footer>
        </html>
        
