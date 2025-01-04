<?php
    // Obtener los datos del formulario
    include "config/db.php"
    if(isset($_POST["SignUp"])){
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    }

    // Validar y sanitizar los datos
    $user = $conn->real_escape_string($user);
    $email = $conn->real_escape_string($email);
    $pass = password_hash($conn->real_escape_string($pass), PASSWORD_BCRYPT);

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO user ( username, email, password) VALUES ('$user', '$email',  '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
?>
