<?php
class  Usuario{
			var $id, $nombre, $email, $encryptar,$privilrgios;
			function registrar($nombre,$email,$encryptar){
                            
				$this-> nombre =$nombre;
				$this-> email = $email;
				$this-> encryptar =$encryptar;
				$sql="SELECT * FROM usuario WHERE email='".$email."'";
				$result= mysql_query($sql, Conectar::conexion());
				$contar= mysql_num_rows($result);
				if($contar==0){
				
				if($_FILES['imagen']['type']=='image/jpp' ||$_FILES['imagen']['type']=='image/jpeg' || $_FILES['imagen']['type']=='image/png'){
				
				$rutaServidor = 'administrador/usuarios/imagenes';
				$rutaTemporal = $_FILES['imagen']['tmp_name'];
				$nombreImagen = $_FILES['imagen']['name'];
				$rutaDestino = $rutaServidor.'/'.$nombreImagen;
				
				 move_uploaded_file($rutaTemporal,$rutaDestino);
				 
				 $sql="INSERT INTO  usuario (nombre,email,password,imagen) values('". $nombre."', '".$email."', '".$encryptar."', '".$rutaDestino."')";
				 $result= mysql_query($sql, Conectar::conexion());
				 
				echo'<script type="text/javascript">
			        alert("su registro  ha sido un exito");
				window.location.href="index.php";
			        </script>';
                        }else{
			echo'<script type="text/javascript">
			alert("imagen no valida");
			window.location.href="registrar.php";
		        </script>';
                        }
                                                            
                        }  else {
                        echo'<script type="text/javascript">
			alert("su email ya ha  sido registrado");
		        window.location.href="registrar.php";
                        </script>';
                                                            
                                    }
                                                
                                  }
                            }

?>