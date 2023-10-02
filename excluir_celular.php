<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Verifique se o 'id' foi passado na URL
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        // Consulta SQL para excluir o celular com base no id_celulares
        $sql = "DELETE FROM celulares WHERE id_celulares = $id";

        if ($mysqli->query($sql)) {
            echo "Registro excluído com sucesso.";
        } else {
            die("Erro na exclusão: " . $mysqli->error);
        }
    } else {
        echo "ID não especificado na URL.";
    }
}
?>
