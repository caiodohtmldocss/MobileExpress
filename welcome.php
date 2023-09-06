<?php
session_start();
if($_SESSION["usuario_logado"] !== true){
    header("Location:index.php");
}
else{
    header("Location:adm.php");
}
?>
