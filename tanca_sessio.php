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
<?php
        
	//session_start();
	session_destroy();
        $_SESSION=array();
?>

<html>

    <head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
    	<title></title>
			
    </head>
	  <body background="imagenes/Pulse_Wallpaper_Pack_by_NYMEZIDE.jpg">
       <!--       <style type="text/css">
            #imagen {
                position: absolute;
border: 2px solid grey;
display: block;
margin-left: 400px;
margin-top: 100px;
border-radius: 800px;
overflow: hidden;
}
            #sesion {
position: absolute;
margin-left: 590px;
margin-top: 100px;
color: white;
}
            #volver {
position: absolute;
margin-left: 540px;
margin-top: 160px;
color: white;
}
           #logo {
position: absolute;
margin-left: 10px;
margin-top: 400px;

}
</style> -->
<img   id='imagen' src='imagenes/fondos-negros-para-pantalla-2.jpg' width='500' height="200">
              
 	  	<div id="wrapper">
                    <header>
                     
                    </header>
  		<div class="main">
  
              	   	<nav>
                		 <ul>
                                    
                                       
                                     <div id="sesion"><h2><img src="imagenes/earth_rotate_300_clr.gif" width="50" height="50"></h2></div>
                                         <div id="volver"><br> <a href="index.php"><img src="imagenes/boton_volver_inicio.gif" witdth="100" height="100"></a></div>
				 
                                         
                                         
                                         
                                  
					
                		 </ul>
            		</nav>
    
	    		<section>
                          
    						 
    			
							 						 
			</section>
	
		</div>   
		<div class="footer">
                
		</div>
			</div>
<div id="logo"><img src="imagenes/logo.png" width="227" height="170"></div>
	  </body>
          
</html>