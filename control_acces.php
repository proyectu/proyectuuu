 <?php

$nom = $_POST['usuari']; //aqui obtenemos lo campos con el metodo $_post 
$pwd = hash('sha256', $_POST['contrasena']);  
$con = mysqli_connect('localhost','root','rocoso123','web_projecte')or die ('Ha fallado la conexi&oacute;n: '.mysql_error()); 

//nota: usuario_base de datos dejala default y sera "root" 

$cons1="select * from usuari where nomUsuari='".$nom."' and clau='".$pwd."'";
$query1 = mysqli_query($con,$cons1);
$registres = mysqli_num_rows($query1);
$Result1= mysqli_fetch_array($query1);

if($registres<1){ //Si no es dona, enviara un missatge d'alerta
echo "<script>alert('Nombre o password Incorrecto, verifique...');window.location='index.php';</script>"; 
session_destroy(); 
}else{ 
session_start();
$usuari=$_POST["usuari"];
$contrasenya=hash('sha256', $_POST['contrasena']);
$_SESSION["ultimAcces"] = time();
     $_SESSION["usuari"] = $_POST["usuari"];
    $_SESSION["contrasenya"] = hash('sha256', $_POST['contrasena']);
    //si donem al checkbox recorda, es crearan les cookies que caducaran despres d'una hora
if (isset($_POST['recorda'])){
        setcookie("usuari",$_POST['usuari'],time()+(3600),"/");
        setcookie("contrasenya",hash('sha256', $_POST['contrasena']),time()+(3600),"/");}
    else {
        setcookie("usuari",$_POST['usuari'],time()-(3600),"/");
        setcookie("contrasenya",hash('sha256', $_POST['contrasena']),time()-(3600),"/");
    }
    // En cas que tot sigui correcte, s'obrira la pagina d'usuari
echo "<script>window.location='pagina_usuari.php';</script>"; 
} 
?> 