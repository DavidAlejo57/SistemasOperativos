<?php
session_start();
	require "conex.php";
	if(isset($_POST["correo"]) && isset($_POST["clave"])){
		$user = $_POST["correo"];
		$pass = $_POST["clave"];
		if($user=="" || $pass==""){
			print("Debe ingresar los datos requeridos");
		}else{
			$sql = "select * from cliente where correo_cli='$user' and clave_cli='$pass'";
			$r = mysqli_query($l,$sql);
			$n = mysqli_num_rows($r);
			if($n==1){
				$_SESSION['cod_cli'] = $user;
				header("location:../Mapa2.php");
			}else{
				print("Hola");
				header("location:../Login.html");
			}
			
		}
	}
?>