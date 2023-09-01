<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password= $_POST['password'];
    
    $usuario="alunosenai@gmail.com";
    $senhacerta="senha123";

    if($email===$usuario && $password===$senhacerta){
       $_SESSION["usuario_logado"] =  true;
<<<<<<< HEAD
       header("Location: index.php");
=======
       header("Location: welcome.php");
>>>>>>> 377334d2f7424387fc85a0df2eee7c74e286ca16
    } else {
        echo "Usuário ou senha incorretos. Tente novamente.";
        header("Location: index.php");
    }
}
?>