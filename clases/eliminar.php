<?php

	$id = $_POST['id'];

	require('conexion.php');
	$con = conectar();
	$sql = "DELETE FROM users WHERE id ='$id' ";
	$q = $con->prepare($sql);
	$q->execute(array($id));

?>