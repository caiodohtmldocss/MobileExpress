<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicial.css">
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
    
            <div class="menu" id="menu">
                <a href="index.php">Home</a>
                <a href="indexiphone.php">Apple</a>
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
    <title>Pagamento Débito</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            align-self: center;
        }

        #total {
            font-weight: bold;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Pagamento Débito</h1>

    <form>
        <label for="numero_cartao">Número do Cartão:</label>
        <input type="text" id="numero_cartao" name="numero_cartao" placeholder="1234 5678 9012 3456" required>

        <label for="nome_cartao">Nome Impresso no Cartão:</label>
        <input type="text" id="nome_cartao" name="nome_cartao" placeholder="Nome do Titular" required>

        <label for="validade_cartao">Validade do Cartão:</label>
        <select id="validade_cartao" name="validade_cartao_mes" required>
            <option value="" disabled selected>Mês</option>
            <option value="01">Janeiro</option>
            <option value="02">Fevereiro</option>
            <!-- Adicione os meses restantes -->
        </select>
        <select id="validade_cartao_ano" name="validade_cartao_ano" required>
            <option value="" disabled selected>Ano</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <!-- Adicione os anos futuros -->
        </select>

        <label for="codigo_seguranca">Código de Segurança:</label>
        <input type="text" id="codigo_seguranca" name="codigo_seguranca" placeholder="123" required>

        <label for="parcelas">Parcelar em Quantas Vezes:</label>
        <select id="parcelas" name="parcelas">
            <option value="1">1x</option>
            <option value="2">2x</option>
            <option value="3">3x</option>
            <!-- Adicione mais opções de parcelamento conforme necessário -->
        </select>

    

        <div class="center">
        <label>Total:<p id="total">$100.00</p>
            <button type="submit">Concluir Compra</button>
        </div>
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