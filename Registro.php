<?php
$connexio = mysqli_connect("localhost","root","rocoso123","web_projecte"); 
session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cambiar contraseña</title>
    </head>
    <body background="imagenes/Pulse_Wallpaper_Pack_by_NYMEZIDE.jpg">
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Orbitron);
              a:link {
                
                 color: white;
                 text-decoration: none;
             }
             a:visited {
                 color: white;
                 text-decoration: none;
             }
            #foto {
                position: absolute;
border: 2px solid white;
right:  200px;
border-radius: 800px;
overflow: hidden;
}
            #imagen {
                position: absolute;
border: 2px solid grey;
display: block;
margin-left: 400px;
margin-top: 100px;
border-radius: 800px;
overflow: hidden;
}
            #form {
position: absolute;
margin-left: 570px;
margin-top: 150px;
color: white;
font-size: 12px;
font-family: 'Orbitron', sans-serif;
}
            #boton {
position: absolute;
margin-left: 50px;
margin-top: 0px;
color: white;
font-size: 12px;
font-family: 'Orbitron', sans-serif;
}
            #saludo {
                position: absolute;
color: white;
right:  40px;
font-family: 'logobloqo2';

}


</style>

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
    </body>
</html>