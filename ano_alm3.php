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
    <title>3º Ano ALM - Instituto Federal</title>
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
    <h1 class="centered-text">3° Ano ALM</h1>
    <p class="centered-text2">Durante o terceiro ano são introduzidos conceitos sobre a área de Alimentos em casos especificos,como por exemplo em matérias como Tec. em carnes, leite, Gestão Ambiental.</p>
    <div class="container">
        <?php
        $disciplinas = array(
            array('Administração, Empreendedorismo e Marketing', '66h', 'empreendalm.png'),
            array('Biologia', '66h', 'bioimg.png'),
            array('Ed. Física', '66h', 'edfisica.png'),
            array('Física', '100h', 'fisica.png'),
            array('Geografia', '66h', 'geografia.png'),
            array('Gestão Ambiental e Tratamento de Resíduos', '66h', 'gestaoamb.png'),
            array('Português', '66h', 'portugues.png'),
            array('Matemática', '133h', 'matematica.png'),
            array('Química', '100h', 'quimica.png'),
            array('Sociologia', '100h', 'sociologia.png'),
            array('Tec. de Bebidas', '100h', 'bebidas.png'),
            array('Tec. de Carnes e Derivados', '100h', 'carne.png'),
            array('Tec. de Glicídios e Lipídios', '100h', 'lipidio.png'),
            array('Tec. de Leite e Derivados', '100h', 'leite.png'),
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
<script src="https://stackpath.bootstrapcdn