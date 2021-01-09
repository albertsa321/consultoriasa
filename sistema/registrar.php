<?php
include('lib/conexion.php');
include('lib/function.php');
?>
<html>

	<head>
		<title> registrate</title>
		<link href="./img/carrito.png" rel="icon" type="image/x-icon">
	</head>

	<body bgcolor="#EAEAAE">
	<h3> <font face="arial" color="#00009C  ">
	
	<br><br><br><br>
	<?php
	if(!isset($_SESSION['nombre'])){
	echo'
		<form  method ="POST" onsubmit=" return  validarForm(this);" enctype="multipart/form-data">	
				<table border = 1 align = "center" bgcolor="#8F8FBD  ">
				<tr>
				 <td colspan = 2 align = "center" bgcolor="#32CD32 "> registrate </td>
				</tr>
					<tr>
						<td> imagem </td>
						<td><input type="file" name="imagen" required ></td>
					</tr>
					<tr>
						<td> nombre </td>
						<td><input type="text" name="nombre" required></td>
					</tr>
					<tr>
						<td> email </td>
						<td><input type="email" name="email" required></td>
					</tr>
					<tr>
						<td> contrase&ntildea </td>
						<td><input type="password" name="password"  required ></td>
					</tr>
					<tr>
						<td> ingresa  otra vez tu contrase&ntilde;a </td>
						<td><input type="password" name="password2"  required></td>
					</tr>
					
					
					<tr>
						<td colspan=2 align = "center"bgcolor="#C0D9D9 ">
							<input type = "submit" value = "inociar sesion">
						</td>
					</tr>
				</table>
			</form>';
			}else{
			echo'<script type="text/javascript">
				alert"false error  buey"
			    window.location.href="index.php";
		        </script>
				';
				}
			 ?>
			
			

			
	<?php
				if($_POST){
				$nombre = $_POST['nombre'];
				$email =  $_POST['email'];
				$password = $_POST['password'];
				
				$encryptado = md5($password);
				$password2 = $_POST['password2'];
				$encryptar2 =  md5($password2);
				
				if($encryptado==$encryptar2){
				$usuario=new Usuario();
				$usuario->registrar($nombre,$email,$encryptado);
                                }
                                
                                }
   ?>
                                
				<br><br>
                                <h3>
	<center>
        
     &iquest; ya tienes cuenta con  nosotros?
         <br>
		 <br>
         <a href="entrar.php">inicia sesion</a>
        </center>
	</h3>
	</body>
</html>