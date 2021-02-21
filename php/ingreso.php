<?php
	require "conex.php";
if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["cedula"]) && isset($_POST["edad"]) && isset($_POST["contacto"]) && isset($_POST["correo"]) && isset($_POST["clave"]) && isset($_POST["direccion"])){
	$nom = $_POST["nombre"];
	$ape = $_POST["apellido"];
	$cedu = $_POST["cedula"];
	$edad = $_POST["edad"];
	$conta = $_POST["contacto"];
	$corre = $_POST["correo"];
	$pass = $_POST["clave"];
	$dire = $_POST["direccion"];
	if($nom == "" || $ape ==""|| $cedu=="" || $edad=="" || $conta =="" || $corre=="" || $pass=="" || $dire==""){
		print "Ingrese todos los campos";
	}else{
		$sql = "insert into cliente(cod_cli,nom_cli,ape_cli,telefono_cli,año,correo_cli,clave_cli,direccion_cli)
		values('$cedu','$nom','$ape','$conta',$edad,'$corre','$pass','$dire')";
		$r = mysqli_query($l,$sql) or die("Error al ingresar al nuevo usuario");
		if($r){
			print "Se guardo correctamente el usuario";
			header("location:../index.html");
		}
	}
}
?>