
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
    <div id="banner">
        <img id="banner" src="img/samsung.png" alt="">
    </div>
    <main id="product-list">
    
    <?php
            include("conexao.php");

            // Faça a consulta SQL
            $sql = "SELECT * FROM celulares WHERE marca_celulares = 'samsung'";
            $resultado = $mysqli->query($sql);
            
            // Verifique se a consulta foi bem-sucedida
            if ($resultado) {
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        $produto = $row;
                        echo '<div class="product">';
                        echo "<img src='" . $row["imagem_celulares"] . "'>";
                        echo "<p class='name'>" . $row["nome_celulares"] . "</p>";
                        echo "<p class='price'>R$" . $row["preco_celulares"] . "</p>";
                        echo "<a href='detalhes.php?id=" . $produto['id_celulares'] . "' class='link-detalhes'>Comprar</a>";
                        echo "</div>";


                        
                    }

                } else {
                    echo "Nenhum resultado encontrado.";
                }
            } else {
                die("Erro na consulta: " . $mysqli->error);
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