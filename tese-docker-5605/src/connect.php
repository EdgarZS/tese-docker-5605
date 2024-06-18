<?php
$servername = "mysql";
$username = "root";
$password = "1234";
$dbname = "test";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Cerrar conexión
$conn->close();
?>
