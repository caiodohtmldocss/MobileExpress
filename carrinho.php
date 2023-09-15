<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produto.css">
    <script src="script.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <title>Mobile Express</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php"><img id="logo" src="img/logome.png" alt="Logo da Empresa">
            </div>
    </header>
    <main>
<form>  
    <div class="produto">
        <img src="img/12.png" alt="Produto 1">
        <h2>Produto 1</h2>
        <p>Descrição do Produto 1</p>
        <p>Preço: R$ 50,00</p>
        <label for="quantidade_produto1">Quantidade:</label>
        <select id="quantidade_produto1" name="quantidade_produto1">
            <option value="1">1</option>
            <option value="2">2</option>
            </select>
        <button onclick="removerProduto('produto1')">Remover Produto</button>
    </div>
    
    <div>
        <label for="frete">Calcular Frete:</label>
        <input type="text" id="frete" name="frete">
        <button onclick="calcularFrete()">Calcular</button>
    </div>

    <div id="subtotal">
        <p>Subtotal: R$ 0,00</p>
    </div>

    <button onclick="finalizarCompra()">Finalizar Compra</button>
</form>
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