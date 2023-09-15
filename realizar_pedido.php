<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="realizar_pedido.css">
    <script src="script.js"></script>
    <title>Realizar Pedido</title>
</head>
<body>
<header>
        <nav>
            <div class="logo">
            <a href="index.php"><img id="logo" src="img/logome.png" alt="Logo da Empresa">
            </div>
            <div class="menu" id="menu">
            <a href="index.php">Home</a>
                <a href="indexiphone.php">Iphone</a>
                <a href="indexxaiomi.php">Xiaomi</a>
                <a href="indexmotorola.php">Motorola</a>
                <a href="indexsamsung.php">Samsung</a>
            </div>
            <div class="navbar">
                <div class="hamburguer" onclick="toggleMenu()">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
        </nav>
    </header>
    <div class="realizar">
    <h1>Realizar Pedido</h1>
    <form method="POST" action="processar_pedido.php">
        <label for="nome_completo">Nome Completo:</label>
        <input type="text" name="nome_completo" required><br><br>
        
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required><br><br>
        
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" required><br><br>
        
        <label for="endereco1">Linha de Endereço 1:</label>
        <input type="text" name="endereco1" required><br><br>
        
        <label for="endereco2">Linha de Endereço 2 (Opcional):</label>
        <input type="text" name="endereco2"><br><br>
        
        <label for="cep">CEP:</label>
        <input type="text" name="cep" required><br><br>
        
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" required><br><br>
        
        <input type="submit" value="Concluir">
    </form>
    </div>
    <footer>
        <div class="footer-icons">
            <a class="items-social-media" href="https://www.facebook.com/senaitaubate">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="items-social-media" href="https://twitter.com/senai_taubate">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="items-social-media" href="https://www.instagram.com/senaitaubate/">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="items-social-media" href="https://br.linkedin.com/company/escolasenaitaubate">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="items-social-media" href="https://www.youtube.com/@SenaiSaoPauloSP">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        <div class="footer-link">
            <strong>Sede Mobile Express - Pq. Residencial Maria Elmira (CE 207)</strong>
            <p>Av. Monsenhor Theodomiro Lobo, 100 - Pq. Residencial Maria Elmira</p>
            <p>(12) 3653-1943</p>
        </div>
    </footer>
</body>
</html>
