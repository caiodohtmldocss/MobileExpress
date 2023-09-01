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
                <img id="logo" src="img/logome.png" alt="Logo da Empresa">
            </div>
        </nav>
    </header>
   <br>
   <br>
   <br>
   <br>
    <main>
        <div class="login-form">
<<<<<<< HEAD
            <form method="POST" action="principal.html" onsubmit="return validateForm()">
                <input type="email"  name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Senha" required>
                <button type="submit">Login</button>
=======
            <form method="POST" action="validacao.php" onsubmit="return validateForm()">
                <input type="email"  name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Senha" required>
                <!-- <button type="submit">Login</button> -->
                <input class="botaologar" type="submit" value="ENTRAR">
>>>>>>> 377334d2f7424387fc85a0df2eee7c74e286ca16
            </form>
            <p id="login-message"></p>
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