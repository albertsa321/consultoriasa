<?php
session_start();
unset($_SESSION['npmbre']);
$_SESSION=array();
session_destroy();
echo'<script type="text/javascript">
				alert("cerrando sesion");
			    window.location.href="index.php";
		        </script>';
?>