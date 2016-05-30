
<?php
session_start();
$connexio = mysqli_connect("localhost","root","rocoso123","web_projecte");


define("TEMPSINACTIU", 3600 ); //Segons maxims (1 hora)



//El temps transcurregut sera la diferencia entre el temps actual i l'ultim acces
$tempsTranscorregut = time() - $_SESSION["ultimAcces"];


if ($tempsTranscorregut >= TEMPSINACTIU) { //Si s'ha superat el temps inactiu, la sessio es tancara
    session_destroy(); //La sessio es tanca
    header("Location: index.php"); // Ens torna a la pagina principal
} 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cambiar contraseña</title>
    </head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <body background="imagenes/Pulse_Wallpaper_Pack_by_NYMEZIDE.jpg">

<img id="menu" src="imagenes/difuminado_degradado_by_andredevonne-d564i6z.jpg" width="299" height="120">
<div id="foto">
        <table bgcolor="white">
            
            <tr >
                <td> <?php //Mostrarem la fotografia del usuari consultant a la base de dades
                $usu = $_SESSION['usuari'];
                $ffoto= "SELECT foto from usuari WHERE nomUsuari = '$usu'";
                $q = mysqli_query($connexio,$ffoto);
           $ff = mysqli_fetch_array($q);
           $x= $ff['foto'];
                // Si l'usuari ha pujat una fotografia es mostrara com a perfil, en cas contrari es mostrara una
           // per defecte
           if(empty($x)){  echo "<img src='imagenes/perfil.png' width='100' heigh='100'>";  } else {
                echo "<img src='imagenes/$x' width='100' heigh='100'>"; }?>
                </td> 
              
            </tr> 
            
           </table>
  </div>

<img   id='imagen' src='imagenes/fondos-negros-para-pantalla-2.jpg' width='500' height="200">
<div id='titulo'>
    Cambio de password:<br></div>
        <div id="saludo">
<?php
$usuari = $_SESSION['usuari'];

echo "Hola $usuari"
        ?><br>
        <b><a href="pagina_usuari.php">Perfil</a><br>
        <a href="cambiar_foto.php">Cambiar foto de perfil</a><br>
        <a href="tanca_sessio.php">Cerrar Sesion</a></b><br></div>
        <div id='form'>
        <form method="POST" action="pagina_usuari.php">
            Nuevo password:<br>
            <input type="password" name="ncontrasena"><br><br>
            Confirmar password:<br>
            <input type="password" name="ncontrasena2"></div>
<div id='aceptar'><input type="submit" value="Aceptar" name="Aceptar"></div>
            
           
       
</form>

       <div id="logo"><img src="imagenes/logo.png" width="227" height="170"></div> 
    </body>
</html>
