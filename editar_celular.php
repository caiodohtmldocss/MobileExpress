<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="editecx.css">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <a href="index.php"><img id="logo" src="img/logome.png" alt="Logo da Empresa"></a>
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

<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Verifique se o 'id' foi passado na URL
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        // Consulta SQL para obter os dados do celular com base no id_celulares
        $sql = "SELECT * FROM celulares WHERE id_celulares = $id";
        $resultado = $mysqli->query($sql);

        if ($resultado) {
            if ($resultado->num_rows == 1) {
                $row = $resultado->fetch_assoc();
                // Formulário de edição com os campos preenchidos com os dados existentes
                echo '<form action="" method="post">';
                echo '<input type="hidden" name="id_celulares" value="' . $row["id_celulares"] . '">';
                echo 'Nome: <input type="text" name="nome" value="' . $row["nome_celulares"] . '"><br>';
                echo 'Preço: <input type="text" name="preco" value="' . $row["preco_celulares"] . '"><br>';
                echo '<input type="submit" value="Atualizar">';
                echo '</form>';
            } else {
                echo "Nenhum registro encontrado com o ID fornecido.";
            }
        } else {
            die("Erro na consulta: " . $mysqli->error);
        }
    } else {
        echo "ID não especificado na URL.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se os campos foram submetidos
    if (isset($_POST["id_celulares"], $_POST["nome"], $_POST["preco"])) {
        $id = $_POST["id_celulares"];
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];

        // Consulta SQL para atualizar os dados do celular com base no id_celulares
        $sql = "UPDATE celulares SET nome_celulares = '$nome', preco_celulares = '$preco' WHERE id_celulares = $id";

        if ($mysqli->query($sql)) {
            echo '<script>alert("Registro atualizado com sucesso!");</script>';
            echo '<script>
                setTimeout(function(){
                    window.location.href = "adm.php";
                }, 1); // Redireciona após 1 segundo
              </script>';
        } else {
            die("Erro na atualização: " . $mysqli->error);
        }
    } else {
        echo "Campos obrigatórios não preenchidos.";
    }
}
?>

    
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
