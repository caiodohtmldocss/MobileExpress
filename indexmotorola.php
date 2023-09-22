<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <title>Mobile Express</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
            <a href="index.php"><img id="logo" src="img/logome.png" alt="Logo da Empresa">
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
    <div id="banner">
        <img id="banner" src="img/motorola.png" alt="">
    </div>

    <main id="product-list">
        <div class="product">
            <img src="img/E22.png" alt="Item 1">
            <h2>Motorola Moto E22 128 GB</h2>
            <p>R$  868,00 à vista</p>
        </div>
        <div class="product">
            <img src="img/G53-removebg-preview.png" alt="Item 2">
            <h2>Motorola Moto G53 128GB</h2>
            <p>R$ 1.129,00 à vista</p>
        </div>
        <div class="product">
            <img src="img/E13-removebg-preview.png" alt="Item 3">
            <h2>Motorola Moto E13 64 GB</h2>
            <p>R$ 1.099,00 à vista</p>
        </div>
        <div class="product">
            <img src="img/G52-removebg-preview.png" alt="Item 4">
            <h2>Motorola Moto G52 128GB</h2>
            <p>R$ 1.999,00 à vista</p>
        </div>
        <div class="product">
            <img src="img/Edge30-removebg-preview.png" alt="Item 5">
            <h2>Motorola Moto Edge 30 Neo 256GB</h2>
            <p>R$ 3.499,00 à vista</p>
        </div>
        <div class="product">
            <img src="img/G23-removebg-preview.png" alt="Item 6">
            <h2>Motorola Moto G23  128GB</h2>
            <p>R$ 1.599,00 à vista</p>
        </div>
        <div class="product">
            <img src="img/G42-removebg-preview (1).png" alt="Item 7">
            <h2>Motorola Moto G42 128GB</h2>
            <p>R$ 999,00 à vista</p>
        </div>
        <div class="product">
            <img src="img/G32-removebg-preview.png" alt="Item 8">
            <h2>Motorola Moto  G32 128GB</h2>
            <p>R$ 1.499,00 à vista</p>
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