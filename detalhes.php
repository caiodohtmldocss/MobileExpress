<?php
include('conexao.php');
if (isset($_GET['id'])) {
    $id_produto = $_GET['id'];

    // Consulta SQL para buscar informações do produto na tabela id_celulares
    $sql = "SELECT * FROM celulares WHERE id_celulares = $id_produto";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $produto = $result->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compras.css">
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
            <div class="thumbnail-images">
                <?php
                if (isset($_GET['id'])) {
                    // Exibir as miniaturas das imagens com as funções JavaScript associadas
                    echo '<img src="' . $produto['imagem_celulares2'] . '" alt="Miniatura 2" onclick="trocarImagem(\'' . $produto['imagem_celulares2'] . '\')">';
                    echo '<img src="' . $produto['imagem_celulares3'] . '" alt="Miniatura 3" onclick="trocarImagem(\'' . $produto['imagem_celulares3'] . '\')">';
                    echo '<img src="' . $produto['imagem_celulares4'] . '" alt="Miniatura 4" onclick="trocarImagem(\'' . $produto['imagem_celulares4'] . '\')">';
                    echo '<img src="' . $produto['imagem_celulares5'] . '" alt="Miniatura 5" onclick="trocarImagem(\'' . $produto['imagem_celulares5'] . '\')">';
                }
                ?>
            </div>
            <div class="main-image">
                <img id="imagem-grande" src="<?php echo $produto['imagem_celulares']; ?>" alt="<?php echo $produto['nome_celulares']; ?>">
            </div>
            <div class="formcomprar">
                <h1 class="product-name"><?php echo $produto['nome_celulares']; ?></h1>
                <p class="product-description"><?php echo $produto['descricao_celures']; ?></p>
                <p class="product-price">Preço: R$ <?php echo number_format($produto['preco_celulares'], 2, ',', '.'); ?></p>
                <button class="buy-button" onclick="comprarAgora()">Adicionar ao Carrinho</button>
            </div>
        </div>
    </main>
    <script src="script.js"></script>



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

            