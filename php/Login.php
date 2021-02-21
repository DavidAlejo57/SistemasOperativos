<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
	<fieldset style="width: 400px">
		<legend>Datos de ingreso</legend>
		<form action="validaUsuario.php" method="post" name="formulario">
		<table width="400px" border="0">
			<tr>
				<td width="150px">Correo: </td>
				<td><input name="correo" type="email" required placeholder="usuario@servidor.com"></td>
				<td width="150px">&nbsp;</td>
			</tr>
			
			<tr>
				<td>Clave: </td>
				<td><input name="clave" type="password" required></td>
				<td>&nbsp;</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			
			<tr>
				<td><p><a  href="Cambio.php">Olvidaste tu clave?</a></p></td>
				<td><input type="submit" name="enviar" value="Ingresar"></td>
				<td><p><a href="Registro.php">Registrarse como usuario</a></p></td>
				<td><p><a href="datos/usuarios.php">Registro de los usuarios</a></p></td>
			</tr>
		</table>
			</form>
	</fieldset>
</body>
</html>