<?php
function toggleMenu() {
    echo '<script>';
    echo 'var menu = document.getElementById("menu");';
    echo 'menu.classList.toggle("active");';
    echo '</script>';
}
?>
