<?php
 class  Sesion{
	function  ingresarUsuaro($email,  $encryptar){
	$sql= "SELECT * FROM usuario WHERE email='$email' AND password='$encryptar'";
	
	$result= mysql_query($sql,Conectar::conexion());
	
	if( $row= mysql_fetch_array($result)){
		$imagen=$row[1];
	    $nombre=$row[2];
		$email=$row[3];
		//$password=$row[4];
		$privilegios=$row[5];
		
		$_SESSION['imagen']=$imagen;
		$_SESSION['nombre']=$nombre;
		$_SESSION['email']=$email;
		$_SESSION['privilegios']=$privilegios;
		
	    if($_SESSION['privilegios']=='Usuario')
		{ 
		echo'<script type="text/javascript">
		window.location.href="index.php";
		</script>';
		}else{
		
            echo'<script type="text/javascript">
             
			window.location.href="administrador/index.php";
			</script>';
			}
			} else{
		
		echo'<script type="text/javascript">
                    alert("usuario o password incorrectos");
	        window.location.href="entrar.php";
		</script>';
		     }
            
			
        }
    }
 ?>