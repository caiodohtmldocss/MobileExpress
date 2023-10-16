<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $email = $_POST["email"];
    $novaSenha = $_POST["nova_senha"];
    $confirmarSenha = $_POST["confirmar_senha"];

    // Valide os dados (verifique se os campos estão preenchidos, se o email é válido, etc.)

    if ($novaSenha == $confirmarSenha) {

        echo "Senha redefinida com sucesso!";
        header('Location:login.php');
    } else {
        echo "As senhas não coincidem. Tente novamente.";
    }
}



?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="validacao.php"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <title>Mobile Express</title>
</head>

<body>
    <header>
        <nav>

        <div class="logo">
            <a href="index.php"><img id="logo" src="img/logome.png" alt="Logo da Empresa"></a>
        </div>
        </nav>
    </header>

    <main>
        <div class="login-form">
            <form action="processar_redefinicao.php" method="POST">
                <h2>Redefinir Senha</h2>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
                <br>
                <label for="nova_senha">Nova Senha:</label>
                <input type="password" name="nova_senha" id="nova_senha" required>
                <br>
                <label for="confirmar_senha">Confirmar Nova Senha:</label>
                <input type="password" name="confirmar_senha" id="confirmar_senha" required>
                <br>
                <input class="botaologar" type="submit" value="Redefinir Senha">
            </form>
            
    </main>
    
    <footer>
        <div class="footer-icons">
            <a class="items-social-media" href="https://www.facebook.com/senaitaubate">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="items-social-media" href="https://twitter.com/senai_taubate">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="items-social-media" href="https://www.instagram.com/senaitaubate/">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="items-social-media" href="https://br.linkedin.com/company/escolasenaitaubate">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="items-social-media" href="https://www.youtube.com/@SenaiSaoPauloSP">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        <div class="footer-link">
            <strong>Sede Mobile Express - Pq. Residencial Maria Elmira (CE 207)</strong>
            <p>Av. Monsenhor Theodomiro Lobo, 100 - Pq. Residencial Maria Elmira</p>
            <p>(12) 3653-1943</p>
        </div>
    </footer>

</body>

</html>