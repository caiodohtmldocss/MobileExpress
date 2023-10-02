<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se os campos obrigatórios foram submetidos
    if (isset($_POST["nome"], $_POST["marca"], $_POST["descricao"], $_POST["preco"], $_POST["imagem"])) {
        $nome = $_POST["nome"];
        $marca = $_POST["marca"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        $imagem = $_POST["imagem"];

        // Consulta SQL para inserir um novo celular na tabela
        $sql = "INSERT INTO celulares (nome_celulares, marca_celulares, descricao_celulares, preco_celulares, imagem_celulares) VALUES ('$nome', '$marca', '$descricao', '$preco', '$imagem')";

        if ($mysqli->query($sql)) {
            echo "Celular adicionado com sucesso.";
        } else {
            die("Erro na inserção: " . $mysqli->error);
        }
    } else {
        echo "Campos obrigatórios não preenchidos.";
    }
}
?>

<!-- Formulário para adicionar um novo celular -->
<form action="adicionar_celular.php" method="post">
    Nome: <input type="text" name="nome"><br>
    Marca: <input type="text" name="marca"><br>
    Descrição: <textarea name="descricao"></textarea><br>
    Preço: <input type="text" name="preco"><br>
    Imagem (URL): <input type="text" name="imagem"><br>
    <input type="submit" value="Adicionar">
</form>
