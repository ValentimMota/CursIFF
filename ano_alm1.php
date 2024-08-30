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
    <title>1º Ano ALM - Instituto Federal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="lobby_alm.php">← Voltar</a>
    </nav>
    <style>
        .centered-text {
            text-align: center;
            margin: 20px; /* Adiciona uma margem ao redor do parágrafo */
        }
        .centered-text2 {
            text-align: center;
            margin-top: 50px;    /* Margem no topo */
            margin-right: 30px;  /* Margem à direita */
            margin-bottom: 50px; /* Margem embaixo */
            margin-left: 30px;   /* Margem à esquerda */
        }
        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 800px;
        }
        .item {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            transition: background-color 0.3s;
        }
        .item img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .item:hover {
            background-color: #e0e0e0;
        }
    </style>
    <h1 class="centered-text">1° Ano ALM</h1>
    <p class="centered-text2">Durante o primeiro ano são introduzidos conceitos sobre a área de Tec. Alimentos, Microbiologia, Int. à Tec. de Alimentos e Biologia são essenciais para a área de Alimentos.</p>
    <div class="container">
        <?php
        $disciplinas = array(
            array('Artes', '66h', 'artesimg.png'),
            array('Biologia', '100h', 'bioimg.png'),
            array('Ed. Física', '66h', 'edfisica.png'),
            array('Física', '100h', 'fisica.png'),
            array('História', '66h', 'historia.png'),
            array('Informática', '66h', 'informatica.png'),
            array('Introdução à Tecnologia de Alimentos', '133h', 'intalm.png'),
            array('Inglês', '66h', 'ingles.png'),
            array('Português', '100h', 'portugues.png'),
            array('Matemática', '100h', 'matematica.png'),
            array('Microbiologia e Conservação de Alimentos', '100h', 'microbio.png'),
            array('Química', '100h', 'quimica.png'),
        );
        
        foreach ($disciplinas as $disciplina) {
            echo '<div class="item">';
            echo '<img src="images/' . $disciplina[2] . '" alt="' . $disciplina[0] . '">';
            echo '<span>' . $disciplina[0] . ' - ' . $disciplina[1] . '</span>';
            echo '</div>';
        }
        ?>
    </div>
    <br>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>