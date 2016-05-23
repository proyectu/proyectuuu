
<?php 
session_start();
$connexio = mysqli_connect("localhost","root","rocoso123","web_projecte");


define("TEMPSINACTIU", 3600 ); //Segons mÃ xims que pot estar l'aplicaciÃ³ inactiva



//Temps transcorregut des de l'Ãºltim accÃ©s a la pÃ gina i la data actual.
$tempsTranscorregut = time() - $_SESSION["ultimAcces"];



if ($tempsTranscorregut >= TEMPSINACTIU) { //Si la sessiÃ³ ha caducat, han passat 30 segons o mÃ©s des de l'Ãºltim accÃ©s...
    session_destroy(); //Destruim sessiÃ³
    header("Location: index.php"); //Mostrem la pÃ gina de caducitat
} 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cambiar foto</title>
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
 width: 100px;
  height: 100px;
  background-position: center center;
  background-repeat: no-repeat;
}
            #saludo2 {
                position: absolute;
color: white;
right:  40px;
font-size: 12px;
font-family: 'Orbitron', sans-serif;
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
            #titulo {
position: absolute;
margin-left: 580px;
margin-top: 120px;
color: white;
font-size: 12px;
font-family: 'Orbitron', sans-serif;
}
            #aceptar {
position: absolute;
margin-left: 640px;
margin-top: 220px;
}
            #form {
position: absolute;
margin-left: 520px;
margin-top: 190px;
color: white;
font-size: 12px;
font-family: 'Orbitron', sans-serif;
}
            #menu {
                position: absolute;
border: 2px solid white;
right:  10px;
top: 2px;
border-radius: 800px;
overflow: hidden;
}
</style>
<img id="menu" src="imagenes/difuminado_degradado_by_andredevonne-d564i6z.jpg" width="299" height="120">
<img   id='imagen' src='imagenes/fondos-negros-para-pantalla-2.jpg' width='500' height="200">

        
        <div id="saludo2">
<?php
$usuari = $_SESSION['usuari'];

echo "Hola $usuari"
        ?><br>
        <b><a href="pagina_usuari.php">Perfil</a><br>
        <a href="cambiar_contrasena.php">Cambiar contraseña</a><br>
        <a href="tanca_sessio.php">Cerrar Sesion</a></b><br></div>
        <div id="titulo">
            <b>Cambiar foto de perfil:</b><br></div>
            
<div id="form">  <form enctype="multipart/form-data" method="POST" action="pagina_usuari.php">
            
            <b> <input type="file" name="nfoto"><br></b></div>
<div id="aceptar">
            <input type="submit" value="Aceptar" name="confirma">
            
           
       
</form></div>
<div id="foto">
        <table bgcolor="white">
            
            <tr >
                <td> <?php
                $usu = $_SESSION['usuari'];
                $ffoto= "SELECT foto from usuari WHERE nomUsuari = '$usu'";
                $q = mysqli_query($connexio,$ffoto);
           $ff = mysqli_fetch_array($q);
           $x= $ff['foto'];
                
                
                       echo "<img src='imagenes/$x' width='100' heigh='100'>"; ?>
                </td> 
              
            </tr> 
            
           </table>
  </div>

        
    </body>
</html>