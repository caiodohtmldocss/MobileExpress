<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password= $_POST['password'];
    
    $usuario="alunosenai@gmail.com";
    $senhacerta="senha123";

    if($email===$usuario && $password===$senhacerta){
       $_SESSION["usuario_logado"] =  true;
       header("Location: welcome.php");
    } else {
        echo "Usuário ou senha incorretos. Tente novamente.";
        header("Location: index.php");
    }
}
?>
