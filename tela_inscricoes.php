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
    <title>Inscrições - Instituto Federal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px;
            font-family: 'Open Sans', sans-serif;
        }
        .header {
            background-color: #28a745;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .main-content {
            padding: 40px 0;
        }
        .section-title {
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 24px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
<header class="header">
        <div class="container">
            <h1>CursIFF</h1>
            <?php
include 'navegaçao1.html';
 
?>
        </div>
    </header>
<body>
    <div class="container text-center mt-5">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
        </div>
    </div>
    <?php
include 'rodape.html';
?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>