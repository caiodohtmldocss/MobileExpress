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
    <link rel="stylesheet" href="comprar.css">
    <script src="comprar.js"></script>
    <title>Mobile Express - Comprar</title>
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
        <div class="main-image">
            <img src="<?php echo $produto['imagem_celulares']; ?>" alt="<?php echo $produto['nome_celulares']; ?>">
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
            <p class="price">Preço: R$ <?php echo $produto['preco_celulares']; ?></p>
            <input type="submit" value="Finalizar Compra">
        </form>
    </main>

    <footer>
        <!-- Inclua o rodapé comum a todas as páginas, se houver -->
    </footer>
</body>

</html>
