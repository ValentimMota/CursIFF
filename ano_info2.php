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
    <title>2º Ano INFO - Instituto Federal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="lobby_info.php">← Voltar</a>
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
    <h1 class="centered-text">2° Ano INFO</h1>
    <p class="centered-text2">Durante o segundo ano, o curso de Informática é introduzido à máterias essenciais para ampliar a visão sobre a área da informatica, matérias como Banco de Dados, A.M.S, e a própria Programação são </p>
    <div class="container">
        <?php
        $disciplinas = array(
            array('Análise e Modelagem de Sistemas', '66h', 'analise.png'),
            array('Banco de Dados', '66h', 'banco.png'),
            array('Biologia', '66h', 'bioimg.png'),
            array('Ed. Física', '66h', 'edfisica.png'),
            array('Filosofia', '33h', 'filosofia.png'),
            array('Física', '100h', 'fisica.png'),
            array('Geografia', '66h', 'geografia.png'),
            array('Hardware 2', '66h', 'hardware.png'),
            array('História', '66h', 'historia.png'),
            array('Inglês', '66h', 'ingles.png'),
            array('Português', '100h', 'portugues.png'),
            array('Matemática', '100h', 'matematica.png'),
            array('Programação 2', '66h', 'programacao.png'),
            array('Química', '66h', 'quimica.png'),
            array('Redes de Computadores', '66h', 'redes.png'),
            array('Sociologia', '33h', 'sociologia.png'),
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