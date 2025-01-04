<?php
require_once("config/conexion.php");

if (isset($_POST["enviar"]) && $_POST["enviar"] == "si") {
    require_once("models/usuario.php");
    $usuario = new Usuario();
    $usuario->login();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ConectaTec</title>
    <link rel="stylesheet" href="public/css/paleta.css">
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/viewBarra.css">
</head>
<body>

    <!-- Barra de navegación -->
    <header>
        <div class="left-section">
            <a href="index.php"><img src="src/image/logo.jpg" alt="logo"></a>
            <a href="index.php"><p>ConectaTec</p></a>
        </div>
    </header>

    <!-- Formulario de login -->
    <div class="formulario">
        <h1>Bienvenido</h1>
        <form action="index.php" method="post" id="loginForm">
            <!-- Correo -->
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

            <!-- Contraseña -->
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" placeholder="Ingresa tu contraseña" required>

            <!-- Botón de envío -->
            <input type="hidden" name="enviar" value="si">
            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>
