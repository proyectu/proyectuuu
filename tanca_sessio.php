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