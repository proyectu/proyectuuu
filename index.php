<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

 <?php
        session_start();
        
        
 $connexio = mysqli_connect("localhost","root","rocoso123","web_projecte"); 

        if(isset($_POST["usuarionuevo"]) && isset ($_POST["ncontrasena"]) && isset ($_POST["ncontrasena2"])){
           $nusu = $_POST['usuarionuevo'];
           $f="SELECT * FROM usuari WHERE nomUsuari like '$nusu' ";
    
           $q = mysqli_query($connexio,$f);
           $ff=  mysqli_fetch_array($q);
           
      
            if((hash('sha256', $_POST['ncontrasena']) == hash('sha256', $_POST['ncontrasena2']) ) && ( $ff == 0)){
                $nncontrasena = hash('sha256', $_POST['ncontrasena']);
                  $_POST["ncontrasena"];
            
               $foto=basename( $_FILES['foto']['name']);
               $target_path = "imagenes/";
$target_path = $target_path . basename( $_FILES['foto']['name']);
move_uploaded_file($_FILES['foto']['tmp_name'], $target_path);
         $nnusu= "INSERT INTO usuari VALUES ('$nusu','$nncontrasena','$foto',null)";
echo $foto;

        $consulta = mysqli_query($connexio, $nnusu);
                ?><script>
alert('Cuenta creada con exito'<?php echo $foto ?>);
</script> <?php
            } elseif ((hash('sha256', $_POST['ncontrasena']) != hash('sha256', $_POST['ncontrasena2']))) { 
                            ?>   <script>
alert('Contraseña incorrecta');
window.location.href='Registro.php';
            </script> <?php } else {
                ?>
                <script>
alert('Este usuario ya existe');
window.location.href='Registro.php';
</script>

               
            <?php } 
        }
               
            
      
           
        
?>
      
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body background="imagenes/Pulse_Wallpaper_Pack_by_NYMEZIDE.jpg">


        <img id="mundo" src="imagenes/earth_rotate_300_clr.gif" width="200" height="200">
        <img   id='imagen' src='imagenes/fondos-negros-para-pantalla-2.jpg' width='500' height="200">
        
        <form method="POST" name="formulari" action="control_acces.php">
            <div id="Us"> Usuario<br></div>
            <div id='usu'>
                <input type="text" name="usuari" autofocus=""></div><br><br>
               <div id="p" >Password <br> </div>
            <div id='pas'>
            <input type="password" name="contrasena"></div><br><br>
            <div id="log"><input type="submit" name="Login" value="Login"></div>
            <div id="rec"><input  type="checkbox" name="recordar">Recordar</div>
        </form> <div id="reg"> <a href="Registro.php"><img src="imagenes/registrate-aqui-gratis.gif" with="40" height="40"></a></div>
        <div id="logo"><img src="imagenes/logo.png" width="227" height="170"></div>
    </body>
</html>
