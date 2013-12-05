 <?php 
    session_start();
    if(isset($_SESSION['rut']) ){
  
        header('Location: funcionario/funcionario.php');
    }
 
 ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>TOPV</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <script type="text/javascript" src="jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="jquery.form.js"></script>

 

    </head>

    <body>
        <div class="container">
            <header>
                <h1>Sistema de control de Trabajo del <p> 
                    <span>Tribunal Oral en lo Pena Valdivia</span> 
                </p>
                </h1>

            </header>

            				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form name="ingreso"  id="ingreso" method="post" action=<?php echo $_SERVER['PHP_SELF']; ?> autocomplete="on"> 
                                <h1>Ingreso</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Ingrese su nombre de usuario </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="nombre usuario"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Ingrese contraseña </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="*********" /> 
                                </p>
                              
                                <p class="login button"> 
                                    <input type="submit" id="submit"  name="submit" value="Ingresar" /> 
								</p>

                             <!-- opcion de olvido nombre de usuario o contraseña

                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p> -->
                            </form>
                            <?php
                            // funcion iniciar sesion
                                if(isset($_POST['submit'])){
                                    require "php/conexion.php";
                                    $nombre = $_POST['username'];
                                    $password = $_POST['password'];
                                    $consulta = "SELECT count(*) as cantidad , nombre,  rut , cargo FROM usuarios where Nick = '$nombre' and Password = '$password' " ;
                                    $query = mysql_query($consulta,$conexion);
                                    $fila = mysql_fetch_array($query);

                                     if ( $fila['cantidad'] ==1 ){
                                        session_start();
                                        $_SESSION['rut'] = $fila['rut']; 
                                        $_SESSION['nombre'] = $fila['nombre'];
                                        $_SESSION['cargo'] = $fila['cargo'];
                                        header('Location: funcionario/funcionario.php');
                                        mysql_close($conexion);
                                     }
                                     else {
                                        Echo "Nombre de usuario o password incorrecto !";
                                        mysql_close($conexion);
                                     }
                                }
                            ?>
                        </div>

						
                    </div>
                </div>  
            </div>
    </body>
 
</html>
