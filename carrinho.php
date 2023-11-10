<?php
include("conexao.php"); // Inclua o arquivo de conexão

session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if (isset($_POST['adicionar'])) {
    $id_celular = $_POST['id_celular'];
    $quantidade = $_POST['quantidade'];

    // Execute uma consulta SQL para obter informações do celular com base no ID
    $sql = "SELECT * FROM celulares WHERE id_celulares = $id_celular";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $produto = $row['nome_celulares']; // Nome do celular
        $descricao = $row['descricao_celulares']; // Descrição do celular
        $preco = $row['preco_celulares']; // Preço do celular
        $imagem = $row['imagem_celulares']; // Nome da imagem do celular

        $item = [
            'id_celular' => $id_celular,
            'produto' => $produto,
            'descricao' => $descricao,
            'preco' => $preco,
            'imagem' => $imagem,
            'quantidade' => $quantidade,
        ];

        array_push($_SESSION['carrinho'], $item);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Produtos Disponíveis</h1>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Adicionar ao Carrinho</th>
                    <th>Imagem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Execute uma consulta SQL para obter todos os celulares disponíveis
                $sql = "SELECT * FROM celulares";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id_celular = $row['id_celulares'];
                        $produto = $row['nome_celulares'];
                        $preco = $row['preco_celulares'];
                        $imagem = $row['imagem_celulares'];

                        echo "<tr>";
                        echo "<td>$produto</td>";
                        echo "<td>R$ $preco</td>";
                        echo "<td>
                                <form action='index.php' method='post' class='carrinho-form'>
                                    <input type='hidden' name='id_celular' value='$id_celular'>
                                    <input type='number' name='quantidade' value='1' min='1'>
                                    <button type='submit' name='adicionar'>Adicionar</button>
                                </form>
                              </td>";
                        echo "<td><img src='$imagem' alt='$produto' width='100'></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <h2>Seu Carrinho de Compras</h2>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($_SESSION['carrinho'] as $item) {
                    $subtotal = $item['preco'] * $item['quantidade'];
                    $total += $subtotal;
                    echo "<tr>";
                    echo "<td>{$item['produto']}</td>";
                    echo "<td>R$ {$item['preco']}</td>";
                    echo "<td>{$item['quantidade']}</td>";
                    echo "<td>R$ $subtotal</td>";
                    echo "</tr>";
                }
                ?>
                <tr>
                    <td colspan="3">Total</td>
                    <td>R$ <?php echo $total; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
