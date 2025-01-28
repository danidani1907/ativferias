<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM usuarios WHERE nome='$nome' AND email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuarios'] = $nome;
        header('Location: index.php');
        exit;  // Importante para garantir que o código abaixo não seja executado
    } else {
        $error = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>tela de login responsiva</title>
</head>
<body>
   <main>
    <div class="form">
    <h1>Faça seu login</h1>
    
    <!-- Corrigindo o formulário -->
    <form method="POST" action="">
        <label for="nome">
            <span>Nome</span>
            <input type="text" id="nome" name="nome" required>
        </label>
        <label for="email">
            <span>Email</span>
            <input type="email" id="email" name="email" required>
        </label>
       
        <button type="submit" class="sessao-login-btn">Entrar</button>
    </form>

 
   </div>
   </main>
</body>
</html>
