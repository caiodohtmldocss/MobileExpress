<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($email)) {
        echo "Por favor, preencha o campo de Email.";
        return;
    }

    if (empty($password)) {
        echo "Por favor, preencha o campo de Senha.";
        return;
    }

    if ($email !== "admin@gmail.com" || $username !== "admin" || $password !== "9999") {
        echo "Usuário ou senha incorretos.";
        return;
    }
    }
?>







  
