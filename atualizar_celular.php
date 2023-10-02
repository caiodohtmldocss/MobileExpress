<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se os campos foram submetidos
    if (isset($_POST["id_celulares"], $_POST["nome"], $_POST["preco"])) {
        $id = $_POST["id_celulares"];
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];

        // Consulta SQL para atualizar os dados do celular com base no id_celulares
        $sql = "UPDATE celulares SET nome_celulares = '$nome', preco_celulares = '$preco' WHERE id_celulares = $id";

        if ($mysqli->query($sql)) {
            echo "Registro atualizado com sucesso.";
        } else {
            die("Erro na atualização: " . $mysqli->error);
        }
    } else {
        echo "Campos obrigatórios não preenchidos.";
    }
}
?>
