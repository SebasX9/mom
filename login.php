<?php
include 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = htmlspecialchars($_POST['username']);
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $conn->prepare($sql);
$stmt->execute(['username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user && password_verify($password, $user['password'])) {
$_SESSION['username'] = $user['username'];
header("Location: welcome.php");
exit();
} else {
echo "Usuario o contraseña incorrectos.";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inicio de sesión</title>
</head>
<body>
<h2>Iniciar sesión</h2>