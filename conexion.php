<?php 

//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli=new mysqli("localhost","root","","Bailando"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}




/*
	 // configurando los parametros

		$db = 'Bailando'; // Nombre de la base de datos
		$dbuser = 'root'; // Nombre de usuario
		$dbpass = ''; // Constraseña a usar
		$host = 'localhost'; // Nombre del servidor
	 ?>

	 <?php 

	 // Establezco la conexion
	 	$conexion = mysqli_connect($host,$dbuser,$dbpass, $db);

	 // Debo seleccionar la base de datos	
	 	$seldb = mysqli_select_db($db);

	 // Debo sacar algun mensaje si hay error en la conexion
	 	if (!$conexion){
	 		die('La embarramos , el error es ('.mysqli_connect_errno().')'.mysqli_connect_error());
	 	}
	 	else{
	 		echo 'Se realizo la conexion satisfactoriamente';
	 	}
	 	mysqli_close($conexion);



*/
	  ?>