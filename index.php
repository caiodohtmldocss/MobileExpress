<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="principal.css">
    <script src="script.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <title>Mobile Express</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img id="logo" src="img/logome.png" alt="Logo da Empresa">
            </div>
            <div class="menu" id="menu">
                <a href="index.php">Home</a>
                <a href="indexiphone.php">Iphone</a>
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
        <div class="avatar">
        <a href="login.php"><img src="./img/avatar.png" alt="Imagem" width="25px" ></a>
</div>  
        <img id="banner" src="img/faixao.png">
        <div class="circle-container">
            <div class="circle-desc">
                <div class="circle">
                    <div>
                        <img src="./img/iphone14promax (2).png" alt="Imagem 1">
                    </div>
                </div>
                <p class="description">Iphone</p>
            </div>
            <div class="circle-desc">
                <div class="circle">
                    <div>
                        <img src="./img/motorolahome-removebg-preview.png" alt="Imagem 2">
                    </div>
                </div>
                <p class="description">Motorola</p>
            </div>
            <div class="circle-desc">

                <div class="circle">
                    <div>
                        <img src="./img/samsungofc.png" alt="Imagem 3">
                    </div>
                </div>
                <p class="description">Samsung</p>
            </div>
            <div class="circle-desc">
                <div class="circle">
                    <div>
                        <img src="./img/xiaomihome.png" alt="Imagem 4">
                    </div>
                </div>
                <p class="description">Xiaomi</p>
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