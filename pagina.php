<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicial.css">
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
        <img id="banner" src="img/faixa.png" alt="">
    </div>

    <main id="product-list">
    
            <?php
            include("conexao.php");
            if (!isset($_GET['busca'])) {
                // Handle the case when no search query is provided.
                // You can display a message or do something else here.
            } else {
                $pesquisa = $mysqli->real_escape_string($_GET['busca']);
                $sql_code = "SELECT *
                   FROM celulares 
                   WHERE marca_celulares LIKE '%$pesquisa%' 
                   OR preco_celulares LIKE '%$pesquisa%' 
                   OR nome_celulares LIKE '%$pesquisa%'";
                $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error);
            
                if ($sql_query->num_rows == 0) {
                    echo "Nenhum resultado...";
                } else {
                    while ($dados = $sql_query->fetch_assoc()) {
                        // Display each product as a div element.
                        echo '<div class="product">';
                        echo "<img src='" . $dados['imagem_celulares'] . "'>";
                        echo "<p class='marca'>" . $dados['marca_celulares'] . "</p>";
                        echo "<p class='nome'>" . $dados['nome_celulares'] . "</p>";
                        echo "<p class='preco'>R$" . $dados['preco_celulares'] . "</p>";
                        echo "</div>";
                    }
                }
            }
            ?>
            
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