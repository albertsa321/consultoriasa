<html>

	<head>
		<title>login</title>
		<link href="./img/login.jpg" rel="icon" type="image/x-icon">
	</head>

	<body bgcolor="#EAEAAE ">
	<center>
	<br><br><br><br><br><br>
	<h3>introduce  tu  coreo  y  contrase&ntilde;a</h3>
	</center>
	 <font face="arial" color="#00009C  ">
	<br>
	

	<?php
	
	//seguridad
	
	
	?>
	
	<?php
	if(!isset($_SESSION['nombre'])){
	echo'
               <form action="login.php" method ="POST"onsubmit="return validarForm(this)">	
				<table border = 1 align = "center" bgcolor="#8F8FBD">
					<tr>
						<td colspan = 2 align = "center" bgcolor="#32CD32 "> inicia   tu sesion</td>
					</tr>
					
					<tr>
						<td> email </td>
						<td><input type="email" name="email" required  placeholder="example@example.com"></td>
					</tr>
					<tr>
						<td> contrase&ntilde;a </td>
						<td><input type="password" name="password"  required ></td>
					</tr>
					
				    <tr>
						<td colspan=2 align ="center" bgcolor="#C0D9D9 ">
							<input type = "submit" value = "inociar sesion">
						</td>
					</tr>
				</table>
			</form>
			';
			}else{
			echo'<script type="text/javascript">
				alert"false error  buey"
			    window.location.href="index.php";
		        </script>';
				}
			 ?>
			
			
		   
		   <center>
			<br><br>
			    &iquest;no dispones de  una  cuenta?
         <br>
		 <h3>
         <a href="registrar.php">registrarte</a>
		 </center>
		 </h3>
	</body>
	
</html>