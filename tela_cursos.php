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
    <title>Cursos Técnicos Integrados</title>
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
    <link rel="stylesheet" href="styles.css">
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
    <div class="container">

        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='lobby_adm.php'">
                    <img src="images/adm.jpg" class="card-img-top" alt="ADM">
                </div>ADM
            </div>
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='lobby_info.php'">
                    <img src="images/info.jpg" class="card-img-top" alt="INFO">
                </div>INFO
            </div>
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='lobby_agro.php'">
                    <img src="images/agro.jpg" class="card-img-top" alt="AGRO">
                </div>AGRO
            </div>
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='lobby_alm.php'">
                    <img src="images/alm.jpg" class="card-img-top" alt="ALM">
                </div>ALM
            </div>
        </div>
    </div>
<br>
<br>
<br>
<br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
include 'rodape.html';
?>

</body>
</html>
