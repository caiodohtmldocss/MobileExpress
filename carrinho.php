<?php
session_start();

if (isset($_POST['id_celular'])) {
    $id_celular = $_POST['id_celular'];

    include('conexao.php');
    $sql = "SELECT * FROM celulares WHERE id_celulares = $id_celular";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $produto = $result->fetch_assoc();

        // Adiciona a quantidade inicial ou mantém 1 se não estiver definida
        $produto['quantidade'] = isset($produto['quantidade']) ? $produto['quantidade'] : 1;

        // Adiciona ou atualiza o produto no carrinho
        if (!isset($_SESSION['carrinho'][$id_celular])) {
            // Se o produto não estiver no carrinho, adiciona-o
            $_SESSION['carrinho'][$id_celular] = $produto;
        }
    } else {
        die("Produto não encontrado.");
    }
} elseif (isset($_POST['acao']) && $_POST['acao'] == 'adicionar') {
    $id_celular = $_POST['id_celular'];
    $_SESSION['carrinho'][$id_celular]['quantidade']++;
} elseif (isset($_POST['acao']) && $_POST['acao'] == 'diminuir') {
    $id_celular = $_POST['id_celular'];
    if ($_SESSION['carrinho'][$id_celular]['quantidade'] > 1) {
        $_SESSION['carrinho'][$id_celular]['quantidade']--;
    }
} elseif (isset($_POST['remover'])) {
    $id_celular = $_POST['id_celular'];
    unset($_SESSION['carrinho'][$id_celular]);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrinho.css">
    <title>Carrinho de Compras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .carrinho-form {
            margin: 20px 0;
        }
        .total {
            margin-top: 20px;
            text-align: right;
            font-size: 20px;
        }
    </style>
</head>
<body>

<header>
    <!-- Adicione o cabeçalho aqui, se necessário -->
</header>

<main>
    <div class="container">
        <h1>Carrinho de Compras</h1>

        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
            <?php
// Exibe os produtos no carrinho
if (!empty($_SESSION['carrinho']) && is_array($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $id_celular => $produto) {
        $quantidade = isset($produto['quantidade']) ? $produto['quantidade'] : 1; // Inicializa quantidade se não estiver definida

        echo "<tr>";
        echo "<td>{$produto['nome_celulares']}</td>";
        echo "<td>R$ {$produto['preco_celulares']}</td>";
        echo "<td>
                <form action='carrinho.php' method='post' class='carrinho-form'>
                    <input type='hidden' name='id_celular' value='$id_celular'>
                    <input type='hidden' name='acao' value='adicionar'>
                    <button type='submit' name='alterar_quantidade'>Adicionar</button>
                </form>
              </td>";
        echo "<td>{$quantidade}</td>";
        echo "<td>R$ " . number_format($produto['preco_celulares'] * $quantidade, 2, ',', '.') . "</td>";
        echo "<td>
                <form action='carrinho.php' method='post' class='carrinho-form'>
                    <input type='hidden' name='id_celular' value='$id_celular'>
                    <input type='hidden' name='acao' value='diminuir'>
                    <button type='submit' name='alterar_quantidade'>Diminuir</button>
                </form>
              </td>";
        echo "<td>
                <form action='carrinho.php' method='post' class='carrinho-form'>
                    <input type='hidden' name='id_celular' value='$id_celular'>
                    <button type='submit' name='remover'>Remover</button>
                </form>
              </td>";
        echo "</tr>";
    }
} else {
    echo '<tr><td colspan="6">O carrinho está vazio.</td></tr>';
}
?>

        // Calcula o valor total
        $total = 0;
        foreach ($_SESSION['carrinho'] as $produto) {
            $total += $produto['preco_celulares'] * $produto['quantidade'];
        }
        ?>

        <div class="total">
            <h2>Total do Carrinho</h2>
            <strong>R$ <?php echo number_format($total, 2, ',', '.'); ?></strong>
        </div>

        <a href="finalizar_compra.php" class="finalizar-compra-button">Finalizar Compra</a>
    </div
