<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compra.css">
    <title>Detalhes do Produto</title>
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
    <main>
    <div class="product-details">
        <!-- Miniaturas das imagens à esquerda -->
        <?php
    $sql = "SELECT * FROM celulares";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $produto = $result->fetch_assoc();
        echo '<div class="thumbnail-images">';
        echo '<img src="' . $produto['imagem_celulares2'] . '" alt="Miniatura 2" onclick="trocarImagem(\'' . $produto['imagem_celulares2'] . '\')">';
        echo '<img src="' . $produto['imagem_celulares3'] . '" alt="Miniatura 3" onclick="trocarImagem(\'' . $produto['imagem_celulares3'] . '\')">';
        echo '<img src="' . $produto['imagem_celulares4'] . '" alt="Miniatura 4" onclick="trocarImagem(\'' . $produto['imagem_celulares4'] . '\')">';
        echo '<img src="' . $produto['imagem_celulares5'] . '" alt="Miniatura 5" onclick="trocarImagem(\'' . $produto['imagem_celulares5'] . '\')">';
        echo '</div>';
        echo '<div class="main-image">';
        echo '<img id="imagem-grande" src="' . $produto['imagem_celulares'] . '" alt="' . $produto['nome_celulares'] . '">';
        echo '</div>';
        echo '<form class="formcomprar"';
        echo '<div class="product-info">';
        echo '<h1 class="product-name">' . $produto['nome_celulares'] . '</h1>';
        echo '<p class="product-description">' . $produto['descricao_celures'] . '</p>';
        echo '<p class="product-price">Preço: R$ ' . number_format($produto['preco_celulares'], 2, ',', '.') . '</p>';
        echo '<button class="buy-button" onclick="comprarAgora()">Comprar Agora</button>';
        echo '</div>';
        echo '</form>';
    }
?>
    <script src="script.js"></script>
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
            