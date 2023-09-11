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
        <img id="banner" src="img/samsung.png" alt="">
    </div>

    <main id="product-list">
        <div class="product">
            <img src="img/Galaxy_S22_Ultra_256GB-removebg-preview.png" alt="Item 1">
            <h2>Galaxy S22 Ultra 256GB</h2>
            <p>R$  4.499,00 à vista</p>
        </div>
        <div class="product">
            <img src="img/Galaxy_A14_64GB-removebg-preview.png" alt="Item 2">
            <h2>Galaxy A14 64GB</h2>
            <p>R$ 922,90 sà vista</p>
        </div>
        <div class="product">
            <img src="img/Z_Flip4_256GB-removebg-preview.png" alt="Item 3">
            <h2>Galaxy Z Flip4 256GB</h2>
            <p>R$ 4.293,07 à vista</p>
        </div>
        <div class="product">
            <img src="img/Galaxy_S21_FE_128_GB-removebg-preview.png" alt="Item 4">
            <h2>Galaxy S21 FE 128 GB</h2>
            <p>R$ 2.399,00 à vista</p>
        </div>
        <div class="product">
            <img src="img/Galaxy_M24_256GB-removebg-preview.png" alt="Item 5">
            <h2>Galaxy M24 256GB</h2>
            <p>R$ 1793,50 à vista</p>
        </div>
        <div class="product">
            <img src="img/Galaxy_M23_128GB-removebg-preview.png" alt="Item 6">
            <h2>Galaxy M23 128GB</h2>
            <p>R$ 1.485,00 à vista</p>
        </div>
        <div class="product">
            <img src="img/Galaxy_A04s_64GB-removebg-preview.png" alt="Item 7">
            <h2>Galaxy A04s 64GB</h2>
            <p>R$ 764,10 à vista</p>
        </div>
        <div class="product">
            <img src="img/Galaxy_S10-removebg-preview.png" alt="Item 8">
            <h2>Galaxy S10 128GB</h2>
            <p>R$ 3.114,99 à vista</p>
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