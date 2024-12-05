<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = htmlspecialchars($_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
$stmt = $conn->prepare($sql);
if ($stmt->execute(['username' => $username, 'password' => $password])) {
echo "Registro exitoso. <a href='usuario.html'>Iniciar sesión</a>";
} else {
echo "Error al registrar.";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>