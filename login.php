<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM funcionario WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code);

    if ($sql_query->num_rows >= 1) {
        $linha = $sql_query->fetch_assoc();
        $senha_hash = $linha['senha'];

        if (password_verify($senha, $senha_hash)) {
            // Senha correta'''''''''   '   
            session_start();
            $_SESSION['user'] = $linha['id'];
            $_SESSION['nome'] = $linha['nome'];

            header("Location: adm.php");
            exit();
        } else {
            // Senha incorreta
            echo "Falha ao Logar! Email ou senha Incorretos";
        }
    } else {
        // Usuário não encontrado
        echo "Falha ao Logar! Email ou senha Incorretos";
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
                <img id="logo" src="./img/logome.png" alt="Logo da Empresa">
            </div>
        </nav>
    </header>
   <br>
   <br>
   <br>
   <br>
    <main>
        <div class="login-form">
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                <p>
                <label>Email</label>
                <input type="text" name="email">
                </p>
                <p>
                <label>Senha</label>
                <input type="password" name="senha">
                </p>
                <input id="botaodokrl" type="submit" value="Entrar">
                <a  id="botao" href="redefinir.php">Redefinir sua senha</a>
            </form>
        </div>
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
