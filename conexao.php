<?php
$hostname = "localhost";
$bancodedados = "bd_mobileexpress";
$usuario = "root";
$senha = "";

    $mysqli = new mysqli("$hostname", "$usuario", "$senha", "$bancodedados");
if ($mysqli->error){
    die("Falha ao conectarao Banco de Dados: " . $mysqli->error);
}
   