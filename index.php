<?php
session_start();
require 'db_config.php';

$login_success = false;
$login_error = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE cpf='$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($senha, $user['senha'])) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: tela_lobby.php');
            exit(); // Certifique-se de sair do script após redirecionar
        } else {
            $login_error = true;
        }
    } else {
        $login_error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Instituto Federal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-4 bg-light p-5 d-flex flex-column align-items-center justify-content-center">
                <img src="images/logo.png" class="mb-3" alt="Instituto Federal" style="width: 150px;">
                <h4 class="mb-3">Digite um nome para o acesso.</h4>
                <form method="POST" class="w-100">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Logar</button>
                </form>
                <?php if ($login_error): ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        CPF ou senha inválidos! Se você não tiver um login, por favor, crie um cadastro.
                    </div>
                <?php endif; ?>
                <a href="tela_cadastro.php" class="btn btn-primary mt-3">Cadastrar</a>
            </div>
            <div class="col-md-8">
                <img src="images/fundo.jpg" class="img-fluid h-100" alt="Instituto Federal" style="object-fit: cover;">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <?php
include 'rodape.html';
?>
</body>
</html>
<?php $conn->close(); ?>
