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
                echo '<form action="atualizar_celular.php" method="post">';
                echo '<input type="hidden" name="id_celulares" value="' . $row["id_celulares"] . '">';
                echo 'Nome: <input type="text" name="nome" value="' . $row["nome_celulares"] . '"><br>';
                echo 'Preço: <input type="text" name="preco" value="' . $row["preco_celulares"] . '"><br>';
                // Adicione mais campos conforme necessário
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
?>
