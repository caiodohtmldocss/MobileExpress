<?php
include 'conexao.php';
session_start();
if (isset($_SESSION['user'])) {
    
} else {
    header("Location: login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se os campos obrigatórios foram submetidos
    if (isset($_POST["nome"], $_POST["marca"], $_POST["descricao"], $_POST["preco"], $_POST["url_imagem"])) {
        $nome = $_POST["nome"];
        $marca = $_POST["marca"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        $url_imagem = $_POST["url_imagem"];
        $url_imagem = $_POST["url_imagem2"];
        $url_imagem = $_POST["url_imagem3"];
        $url_imagem = $_POST["url_imagem4"];
        $url_imagem = $_POST["url_imagem5"];

        // Consulta SQL para inserir um novo celular na tabela
        $sql = "INSERT INTO celulares (nome_celulares, marca_celulares, descricao_celures, preco_celulares, imagem_celulares, imagem_celulares2, imagem_celulares3, imagem_celulares4, imagem_celulares5) VALUES ('$nome', '$marca', '$descricao', '$preco', '$url_imagem', '$url_imagem2', '$url_imagem3', '$url_imagem4', '$url_imagem5')";

        if ($mysqli->query($sql)) {
            echo '<script>alert("Celular adicionado com sucesso!");</script>';
            echo '<script>
                setTimeout(function(){
                    window.location.href = "adm.php";
                }, 1); // Redireciona após 1 segundo
              </script>';
        } else {
            die("Erro na inserção: " . $mysqli->error);
        }
    } else {
        echo "Campos obrigatórios não preenchidos.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="crud.css">
    <title>Document</title>
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
        </nav>
    </header>

<form action="adicionar_celular.php" method="post">
    Nome: <input type="text" name="nome"><br>
    Marca: <input type="text" name="marca"><br>
    Descrição: <textarea name="descricao"></textarea><br>
    Preço: <input type="text" name="preco"><br>
    URL da Imagem 1: <input type="text" name="url_imagem"><br>
    URL da Imagem 2: <input type="text" name="url_imagem2"><br>
    URL da Imagem 3: <input type="text" name="url_imagem3"><br>
    URL da Imagem 4: <input type="text" name="url_imagem4"><br>
    URL da Imagem 5: <input type="text" name="url_imagem5"><br>

    <input type="submit" value="Adicionar">
</form>

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

