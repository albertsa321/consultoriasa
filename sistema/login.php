<?php
session_start();
include('lib/conexion.php');
include('lib/sesion.php');
				if($_POST){
				$email=$_POST['email'];
				$password=$_POST['password'];
                $encryptado = md5 ($password);
                 $autoogin=new Sesion();
                 $autoogin->ingresarUsuaro($email,$encryptado);
				}else{
                echo'<script type="text/javascript">
			    window.location.href="index.php";
		        </script>';
                }
?>









































?>
