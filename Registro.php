<?php
$connexio = mysqli_connect("localhost","root","rocoso123","web_projecte"); 
session_start();

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <title>Cambiar contraseña</title>
    </head>
    <body background="imagenes/Pulse_Wallpaper_Pack_by_NYMEZIDE.jpg">
        
<img   id='imagen' src='imagenes/fondos-negros-para-pantalla-2.jpg' width='500' height="300">

        
<?php
if (isset($_SESSION['usuari'])){
$usuari = $_SESSION['usuari'];
echo "hola $usuari"."<br>";
}

           
        
        ?>
        <div id='form'>
            Crear usuario:<br>
        <form  enctype="multipart/form-data" method="POST" action="index.php">
            Usuario: <br>
            <input type="text" name="usuarionuevo"><br>
            Password: <br>
            <input type="password" name="ncontrasena"><br>
            Confirmar password:<br>
            <input type="password" name="ncontrasena2"><br><br>
            <input type="file" name="foto"><br><br>
            <div id="boton"><input type="submit" value="Aceptar" name="Aceptar">
                <a href="index.php">Inicio</a></div></form>
    
  
       

   </div>
<div id="logo"><img src="imagenes/logo.png" width="227" height="170"></div>
    </body>
</html>