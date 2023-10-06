<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $email = $_POST["email"];
    $novaSenha = $_POST["nova_senha"];
    $confirmarSenha = $_POST["confirmar_senha"];

    // Valide os dados (verifique se os campos estão preenchidos, se o email é válido, etc.)
    if (empty($email) || empty($novaSenha) || empty($confirmarSenha)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, insira um endereço de e-mail válido.";
        exit;
    }

    if ($novaSenha != $confirmarSenha) {
        echo "As senhas não coincidem. Tente novamente.";
        exit;
    }

    // Conecte-se ao banco de dados (substitua essas informações com suas credenciais reais)
    $conexao = mysqli_connect("localhost", "root", "", "bd_mobileexpress");

    // Verifique a conexão com o banco de dados
    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Hash da nova senha (você deve usar uma função de hash segura na prática)
    $senhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);

    // Atualize a senha no banco de dados
    $query = "UPDATE funcionario SET senha='$senhaHash' WHERE email='$email'";
    if (mysqli_query($conexao, $query)) {
        echo '<script>alert("Senha Alterada com Sucesso!");</script>';
        echo '<script>
            setTimeout(function(){
                window.location.href = "login.php";
            }, 1); // Redireciona após 1 segundo
          </script>';
    } else {
        echo "Erro ao redefinir a senha: " . mysqli_error($conexao);
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conexao);
}
?>
