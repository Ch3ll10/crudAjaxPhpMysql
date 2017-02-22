<?php 

	$nombre = $_POST['nombre'];
	$contrasena = $_POST['contrasena'];

	require('conexion.php');
	$con = conectar();
	$sql = 'INSERT INTO users (nombre, contrasena) VALUES (:nombre, :contrasena )';
	$q = $con->prepare($sql);
	$q->execute(array(':nombre'=>$nommbre, ':contrasena'=>$contrasena));

?>