<?php
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$contrasena = $_POST['contrasena'];

	require('conexion.php');
	$con = conectar();
	$sql = "UPDATE users SET nombre='".$nombre."', contrasena='".$contrasena."' WHERE id ='".$id."'";
	$q = $con->prepare($sql);
	$q->execute(array($nommbre,$contrasena, $id));

?>