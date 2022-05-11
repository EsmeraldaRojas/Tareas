<?php


		$mysqli = new MySQLi("localhost", "root","", "mydb");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}

		else{
			
			}//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","z");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
mysqli_set_charset($mysqli,"utf8");

?>