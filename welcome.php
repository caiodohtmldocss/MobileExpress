<?php
session_start();
if($_SESSION["usuario_logado"] !== true){
    header("Location:login.php");
}
else{
    header("Location:index.php");
}