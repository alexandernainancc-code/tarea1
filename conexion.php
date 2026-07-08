<?php
// Datos de conexión - ajusta según tu servidor
$host = "localhost";
$dbname = "inventario_db";
$user = "root";
$pass = "";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
