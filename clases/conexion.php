<?php 

  function conectar(){
	$conn = null;
	$host = '127.0.0.1';
	$db	  = '';
	$user = '';
	$pwd  = '';

	/*
		PDO php de acces object lacual podemos hacer la conexion mas segura los datos contenidos en mysql o cualquier BD
	*/
	try {
		$conn = new PDO('mysql:host='.$host.';dbname='.$db,$user,$pwd);
	}
	catch(PDOException $e){
		echo 'Error en la conexion con la base de datos'.$e;
	}
	return $conn;

}
?>
