<?php
session_start();
if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}
echo "Bienvenido, " . $_SESSION['username'] . "!";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenido</title>
</head>
<body>
<h1>¡Hola, <?php echo $_SESSION['username']; ?>!</h1>
<a href="logout.php">Cerrar sesión</a>


<h1>Guardar Datos</h1>

<form action="recoger2.php" method="post">
    <input type="text" name="nombre" size="20" placeholder="Ecriba su nombre" /><br/>
    <input type="number" name="Edad" min="10" max="75" placeholder="Edad" /><br/>
    <input type="date" name="Fecha" placeholder="Fecha" /><br/>
    <label for="VIP">Es usted un cliente vip ?</label><br/>
    <input type="radio" name="VIP" value="si">Si<br/>
    <input type="radio" name="VIP" value="no">No<br/>
    <select name="Provincia">
        <option>Madrid</option>
        <option>Sevilla</option>
        <option>Bilbao</option>
        <option>Barcelona</option>
    </select>
    <input type="submit" value="Guardar!!" />
</form>
<br>
<a href="busqueda.php">Consultar</a>
<br>
<br>
<a href="eliminar2.php">Eliminar</a>
<br>
<br>
<a href="actualizar4.php">Actualizar</a>
</body>
</html>