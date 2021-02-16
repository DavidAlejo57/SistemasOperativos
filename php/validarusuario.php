<?php
	require "conex.php";
	if(isset($_POST["email"]) && isset($_POST["password"])){
		$user = $_POST["email"];
		$pass = $_POST["password"];
		if($user=="" || $pass==""){
			print("Debe ingresar los datos requeridos");
		}else{
			$sql = "select * from usuario where correo_cli ='$user' and clave_cli='$pass'";
			$r = mysqli_query($l,$sql) or die("El usuario o contraseña es incorrecto");
			$n = mysqli_num_rows($r);
		}
	}
?>