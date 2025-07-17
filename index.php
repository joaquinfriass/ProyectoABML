<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        padding: 30px;
        text-align: center;
    }
    h1 {
        color: #333;
    }
    .menu {
        margin-top: 40px;
    }
    .menu a {
        display: inline-block;
        margin: 10px 20px;
        padding: 12px 24px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 8px;
    }
    .menu a:hover {
        background-color: #0056b3;
    }
    .salir {
        margin-top: 30px;
    }
    .salir a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #312f2fff; 
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
    }
    .salir a:hover {
        background-color: #8d2933ff;
    }
</style>
</head>
<body>

    <h1>Bienvenido, <?= $_SESSION['usuario'] ?> 👋</h1>

    <div class="menu">
        <a href="comisiones.php">Comisiones</a>
        <a href="examenes.php">Exámenes</a>
        <a href="observaciones.php">Observaciones</a>
    </div>

    <div class="salir">
        <a href="logout.php">Cerrar sesión</a>
    </div>

</body>
</html>
