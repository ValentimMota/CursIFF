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
    <title>Lobby - Instituto Federal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <!-- Imagem de fundo com texto -->
    <div class="hero-image">
    </div>

    <!-- Carousel -->
    <div id="demo" class="carousel slide mt-5 mb-5" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img1.jpg" alt="Slide 1" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpg" alt="Slide 2" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="images/img3.jpg" alt="Slide 3" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="images/img4.jpg" alt="Slide 4" class="d-block w-100">
            </div>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php
include 'rodape.html';
?>
</body>
</html>
