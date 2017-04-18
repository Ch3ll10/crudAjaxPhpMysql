<?php
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$contrasena = $_POST['contrasena'];

	require('conexion.php');
	$con = conectar();
	/*
	$sql = "UPDATE users SET nombre='".$nombre."', contrasena='".$contrasena."' WHERE id ='".$id."'";
	*/
	$sql = 'UPDATE users SET nombre=:nombre, contrasena=:contrasena WHERE id=:id';
	$q = $con->prepare($sql);
	$q->execute(array(':nombre'=>$nombre,':contrasena'=>$contrasena, ':id'=>$id));

?>