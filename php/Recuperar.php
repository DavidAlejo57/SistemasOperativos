<?php
	session_start();
	require "conex.php";
if(isset($_SESSION['cod_cli'])){
	$user = $_SESSION['cod_cli'];
	if(isset($_POST["destino"]) && isset($_POST['carrito'])){
		$destino = $_POST["destino"];
		$descripcion = $_POST["referencia"];
		$placa = $_POST["carrito"];
		if($destino == "" || $descripcion == "" || $placa==0){
			print("Ingrese la informacion en todos los campos");
		}else{
			$sql="select * from cliente where correo_cli = '$user'";
    		$r=mysqli_query($l,$sql);
    		while($registro = mysqli_fetch_object($r)){
				$cedula = $registro -> cod_cli;
				$tele = $registro-> telefono_cli;
				$nom = $registro -> nom_cli;
				$ape = $registro -> ape_cli;
				print("<input placeholder='$cedula' value='$cedula' type='text' required name='Cedula' readonly>");
				$sql = "insert into pedido(cedula, Placa, lugar_inicio, lugar_destino)
				values('$cedula','$placa','$descripcion','$destino')";
				$r = mysqli_query($l,$sql) or die("Error al ingrsar el pedido");
				if($r){
					print("El pedido se realizo correctamente");
					$sql = "select max(cod_pedi) from pedido";
					$r = mysqli_query($l,$sql);
					while($registro = mysqli_fetch_object($r)){
						$cod_pedido = $registro -> cod_pedi;
						print("<input placeholder='$cod_pedido' value='$cod_pedido' required name='Cedula' readonly>");
						// Datos para el correo
						$destinatario = "richardcasa2000@gmail.com";
						$asunto = "Contacto desde nuestra web";

						$carta = "Cliente: $nom $ape \n";
						$carta .= "Pedido: $cod_pedido \n";
						$carta .= "Telefono: $tele \n";
						$carta .= "Lugar de inicio: $descripcion";
						$carta .= "Destino: $destino";

						// Enviando Mensaje
						print($carta);
						mail($destinatario, $asunto, $carta);
						header("location:../Mensaje.html");
					}

				}
			}
		}
	}
}
?>