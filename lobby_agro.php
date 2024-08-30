<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: tela_login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lobby AGRO - Instituto Federal Farroupilha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .navbar {
            background-color: #2E4053; /* cor do Instituto Federal Farroupilha */
            color: #fff;
            padding: 10px;
            border-bottom: 1px solid #2E4053;
        }
        .navbar-brand {
            font-size: 18px;
            font-weight: bold;
            color: #fff;
        }
        .nav-item {
            margin-right: 20px;
        }
        .nav-link {
            color: #333;
            font-size: 16px;
        }
        .nav-link:hover {
            color: #337ab7;
        }
        h2 {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        #rodape {
            margin-top: auto;
            background-color: #2E4053; /* cor do Instituto Federal Farroupilha */
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        #rodape a {
            color: #fff;
            text-decoration: none;
        }
        #rodape a:hover {
            color: #337ab7;
        }
        #rodape ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        #rodape li {
            display: inline-block;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="tela_cursos.php">← Voltar</a>
    </nav>
    <div class="container mt-5">
        <h2>Curso Técnico em AGRO - Instituto Federal Farroupilha</h2>
        <div class="row">
            <div class="col-md-4">
                <a class="nav-item nav-link" href="ano_agro1.php">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">1º Ano</h5>
                            <p class="card-text">Informações do 1º ano do curso</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a class="nav-item nav-link" href="ano_agro2.php">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">2º Ano</h5>
                            <p class="card-text">Informações do 2º ano do curso</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a class="nav-item nav-link" href="ano_agro3.php">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">3º Ano</h5>
                            <p class="card-text">Informações do 3º ano do curso</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <footer id="rodape">
        <p>&copy; 2023 Instituto Federal Farroupilha</p>
    </footer>
</body>
</html>