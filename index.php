<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="script.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <title>Mobile Express</title>
</head>

<body>
    <header>
    
        <nav>
        <form action="pagina.php">
        <div class="search-container">
        <div class="search-box">
            <input class="search-input" name="busca" value="<?php if(isset($_GET['busca'])) echo ($_GET['busca']) ?>" placeholder="Procure um celular" type="text">
            <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </div>
    </form>
            <div class="logo">
                <a href="index.php"><img id="logo" src="img/logome.png" alt="Logo da Empresa">
            </div>
            <button id="my-button">
            <a class="avatar" href="login.php"><img src="./img/avatar.png" alt="Imagem" width="25px" ></a>
        </button>
            <div class="menu" id="menu">
                <a href="index.php">Home</a>
                <a href="indexiphone.php">Apple</a>
                <a href="indexxaiomi.php">Xiaomi</a>
                <a href="indexmotorola.php">Motorola</a>
                <a href="indexsamsung.php">Samsung</a>
            </div> 
            <div class="navbar">
                <div class="hamburguer" onclick="toggleMenu()">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        
        <img id="banner" src="img/faixa.png">
        <div class="circle-container">
            <div class="circle-desc">
                <div class="circle">
                    <div>
                        <img src="./img/iphoneofc.png" alt="Imagem 1">
                    </div>
                </div>
                <a class="description" href="indexiphone.php">Apple</a>
            </div>
            <div class="circle-desc">
                <div class="circle">
                    <div>
                        <img src="./img/motorolahome-removebg-preview.png" alt="Imagem 2">
                    </div>
                </div>
                <a class="description" href="indexmotorola.php">Motorola</a>
            </div>
            <div class="circle-desc">

                <div class="circle">
                    <div>
                        <img src="./img/samsungofc.png" alt="Imagem 3">
                    </div>
                </div>
                <a class="description" href="indexsamsung.php">Samsung</a>
            </div>
            <div class="circle-desc">
                <div class="circle">
                    <div>
                        <img src="./img/xiaomihome.png" alt="Imagem 4">
                    </div>
                </div>
                <a class="description" href="indexxaiomi.php">Xiaomi</a>
            </div>
        </div>
    </main>
    <br>
    <br>

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