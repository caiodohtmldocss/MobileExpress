<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se os campos necessários foram preenchidos
    if (isset($_POST['nome']) && isset($_POST['id_produto']) && isset($_POST['numero_cartao']) && isset($_POST['data_validade'])) {
        $id_produto = $_POST['id_produto'];
        $nome = $_POST['nome'];
        $numero_cartao = $_POST['numero_cartao'];
        $data_validade = $_POST['data_validade'];
        // Adicione mais campos conforme necessário

        // Realize as ações necessárias, como salvar no banco de dados

        // Exemplo: Redirecione para uma página de confirmação
        header('Location: confirmacao_compra.php');
        exit();
    } else {
        $erro = "Por favor, preencha todos os campos obrigatórios.";
    }
}

// Se a lógica de compra não foi acionada, recupere os detalhes do produto
if (isset($_GET['id'])) {
    $id_produto = $_GET['id'];

    // Faça a consulta SQL para obter as informações do produto pelo ID
    $sql = "SELECT * FROM celulares WHERE id_celulares = $id_produto";
    $resultado = $mysqli->query($sql);

    // Verifique se a consulta foi bem-sucedida
    if ($resultado && $resultado->num_rows > 0) {
        $produto = $resultado->fetch_assoc();
    } else {
        die("Produto não encontrado.");
    }
} else {
    die("ID do produto não especificado.");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compras.css"> <!-- Adicione o arquivo CSS para a página de compra -->
    <script src="comprar.js"></script> <!-- Adicione o arquivo JS para a página de compra -->
    <title>Mobile Express - Comprar</title>
    <style>
        /* Estilos para a imagem principal */
.main-image img {
    max-width: 100%; /* Reduz o tamanho máximo da imagem para o tamanho do contêiner */
    border: 1px solid #ccc; /* Adiciona uma borda de 1px com cor cinza claro */
}

/* Estilos para o formulário de compra */
form {
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
}
/* Estilos para a imagem principal */
/* Estilos para a imagem principal */
.main-image img {
    max-width: 10px; /* Reduz o tamanho máximo da imagem para 80% do tamanho do contêiner */
    border: 1px solid #ccc; /* Adiciona uma borda de 1px com cor cinza claro */
    display: block; /* Centraliza a imagem na página */
    margin: 0 auto; /* Centraliza a imagem na página */
}

/* Estilos para o formulário de compra */
#checkout-form {
    max-width: 400px;
    margin: 0 auto;
}

#checkout-form label {
    display: block;
    margin-bottom: 8px;
}

#checkout-form input {
    width: calc(100% - 16px); /* Reduz o tamanho dos campos para lidar com a largura do preenchimento */
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box; /* Inclui o preenchimento e a borda no cálculo do tamanho total */
}


</style>
</head>

<body>
    <header>
    <nav>
        <form class="pesq" action="pagina.php">
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

    <main id="checkout-form">
        <?php if (isset($erro)) : ?>
            <p class="erro"><?php echo $erro; ?></p>
        <?php endif; ?>

        <div class="product-details">
            <img src="<?php echo $produto['imagem_celulares']; ?>" alt="<?php echo $produto['nome_celulares']; ?>">
            <p class="name"><?php echo $produto['nome_celulares']; ?></p>
        </div>

        <!-- Formulário de compra -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="numero_cartao">Número do Cartão:</label>
            <input type="text" id="numero_cartao" name="numero_cartao" required>

            <label for="data_validade">Data de Validade:</label>
            <input type="text" id="data_validade" name="data_validade" placeholder="MM/AA" required>

            <!-- Adicione mais campos conforme necessário -->
            <p>Preço:</p>
            <p class="price">R$ <?php echo $produto['preco_celulares']; ?></p>
            <input type="submit" value="Finalizar Compra">
        </form>
    </main>
    </main>

    <footer>
        <!-- Inclua o rodapé comum a todas as páginas, se houver -->
    </footer>
</body>

</html>
