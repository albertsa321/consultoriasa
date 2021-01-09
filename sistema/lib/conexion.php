<?php
class  Conectar{
	public  static function conexion(){
		$server='localhost';
		$user='root';
		$password='';
		$db='sistema';
		$con=mysql_connect($server,$user,$password) or die("error de conezion");
		mysql_select_db($db);
		return $con;
		

}
}


?>