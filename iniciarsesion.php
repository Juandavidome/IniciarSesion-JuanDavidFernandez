<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesión</title>
</head>
<body>
		<h1>Iniciar sesión</h1>
			<form method="post" action="">
				<label for="usuario">Usuario:</label>
				<input type="text" name="usuario" id="usuario">
				<label for="contrasena">Contraseña:</label>
				<input type="password" name="contrasena" id="contrasena">
				<input type="submit" value="Iniciar sesión">
			</form>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$usuario = $_POST["usuario"];
		$contrasena = $_POST["contrasena"];

		$usuario_pre = "ome";
		$contrasena_pre = "2402";

		$errores = array();

		if (empty($usuario)) {
			$errores[] = "Debe ingresar un nombre de usuario";
		}

		if (empty($contrasena)) {
			$errores[] = "Debe ingresar una contraseña";
		}

		if ($usuario != $usuario_pre || $contrasena != $contrasena_pre) {
			$errores[] = "Nombre de usuario o contraseña incorrectos";
		}

		if (count($errores) == 0) {
			echo "<p>Bienvenido $usuario</p>";
		} else {
			echo "<ul>";
			foreach ($errores as $error) {
				echo "<li>$error</li>";
			}
			echo "</ul>";
		}
	}
	?>

</body>
</html>