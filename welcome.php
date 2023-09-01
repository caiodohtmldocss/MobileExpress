<?php
session_start();
if($_SESSION["usuario_logado"] !== true){
<<<<<<< HEAD
    header("Location:login.php");
}
else{
    header("Location:index.php");
}
=======
    header("Location:index.php");
}
else{
    header("Location:adm.php");
}
?>
>>>>>>> 377334d2f7424387fc85a0df2eee7c74e286ca16
