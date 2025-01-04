<?php

if (!empty($_POST["SignUp"])){
    if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email "])) {
        echo "Relllena todos los campos.";
        } else {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email "];
            $password = md5($password);
        }
}


?>