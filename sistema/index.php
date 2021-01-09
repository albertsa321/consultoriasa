<?php
	session_start();
?>

<html>
    <head>
		<title> carrito de  compras</title>
		<link href="./img/carrito.png" rel="icon" type="image/x-icon">
		<link href="./css/estilos.css" rel="stylesheet"  type="text/css">
		
		
	</head>

	<body bgcolor="grey ">
	
	
	<center>
				
				<h3> <font face="arial" color="black ">
             
            <table border = 0 class="menu" color="white">
                <font face="arial" color="white">
                
					<tr>
                                            <td width="250" class="ventana">
											<center>        <font face="arial" color="white">
											
											<?php
$a=file("reloj.data");
$b=$a[0];

if($_COOKIE['conteo']==1){
echo  " visitas   al  momento  $b";
}
else{

$b= $b+1;
$conteo=fopen("reloj.data","w");
fwrite($conteo,$b);
fclose($conteo);
setcookie("conteo", "1");

echo  " visitas   al  momento  $b";
}
?>
</font></center>
											</td>
											
                                                <td align="center" width="250" class="ventana3">  <font face="arial" color="black"> BIENVENISDO(A)</font> 
											<br><br>
											<div  id="header">
											
											<ul class="nav">
												<li> <a href="">index</a></li>
												<li> <a href="">conocenos</a></li>
												
												<li> <a href="">productos</a>
															<ul>
																<li> <a href="">autos</a> 
																<ul>
																<li> <a href="">nuevos</a> </li>
																<li> <a href="">seminuevos</a></li>
																<li> <a href="">usados</a></li>
															    </ul> </li>	
																
															    
																<li> <a href="">ropa</a>
																<ul>
																<li> <a href="">bebes</a> </li>
																<li> <a href="">ni&ntilde;os</a> </li>
																<li> <a href="">ni&ntilde;as</a></li>
																<li> <a href="">hombres</a></li>
																<li> <a href="">mujreses</a></li>
															</ul> </li>
																
													            
																<li> <a href="">electronica</a>
																	<ul>
																<li> <a href="">pantallas</a></li>
																<li> <a href="">celulares</a></li>
																<li> <a href="">tablets</a></li>
																<li> <a href="">minicomponentes</a></li>
																	
															</ul> 
															</li>
																
																
											                    
																
																</ul>
														<li> <a href="">contactanos</a></li>		
														</ul>
													
											
											</td>
                                              
											  <td align="center" width="200" class="ventana2"> 
	<br><br>	

			<?php
				if(isset($_SESSION['nombre']))
                                    {
			?>
			
                        
						<img src="./administrador/usuarios/imagenes/" alt="" width="80" height="80" border="3">

                       

                        <?php
        echo 'BIENBENIDO :'.$_SESSION['nombre'];
                            }else{
                            echo"Tienes  cuenta con  nosotros";
							
                            }
		        ?>
                        
			
			<?php
                            if(!isset($_SESSION['nombre']))
                            {
			?>
			
							<br>
							
                                                        <a href="entrar.php"><font face="arial" color="white"><b> iniciar  sesion</b></font></a>
			<?php
                            }  else {
            ?>
                        <br>
                        <a href="salir.php"><font face="arial" color="white"> cerrar  sesion</font></a>
            <?php
							
                            }
            ?>
          </td>
		  
                                        </tr>
                                        </font>
				</table>
				
	</center>
	<br><br><br><br><br><br><br><br><br>
	<center>
	
		<div  class="cabe">
		
		
		<br>
				
				<center>
				<div class="cabeza">
				<section>
			 <h3> <font face="arial" color="black"> Bienvenudo a  tu  tiendo  en linea " LA  MEJOR" Donde  podras  comprar<br>
				  todo  lo que   nesites a  muy  buen  precio</font> </h3>
				</section>
				
					</div>
					<br><br>
				<div class="cuerpo">
				<br> 
				<img src="./img/carro.jpg" border="3" color="black">
				
				
				
			
			 
					</div>
					
					
        
			
			</h3>
			
			
				</div>
				
				<table>
		
		
		
		
		
		
		</div>
			
		
	</center>			
				
				
				
		</body>
</html>