<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cucin";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos";
}

// Aquí puedes agregar más código para interactuar con la base de datos

// Cerrar la conexión cuando hayas terminado
$conn->close();
?>
