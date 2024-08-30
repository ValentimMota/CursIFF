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
    <title>3º Ano ADM - Instituto Federal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="lobby_adm.php">← Voltar</a>
    </nav>
    <h1 class="centered-text">3° Ano ADM</h1>
    <p class="centered-text2">Durante o terceiro ano, matérias como Direito e Gestão Ambiental são implementados.</p>

    <div class="container">
        <?php
        $disciplinas = array(
            array('nome' => 'Administração Financeira', 'imagem' => 'admfinanceira.png', 'horas' => '66h'),
            array('nome' => 'Biologia', 'imagem' => 'bioimg.png', 'horas' => '66h'),
            array('nome' => 'Direito', 'imagem' => 'direito.png', 'horas' => '66h'),
            array('nome' => 'Ed. Física', 'imagem' => 'edfisica.png', 'horas' => '66h'),
            array('nome' => 'Empreendedorismo', 'imagem' => 'empreendedorismo.png', 'horas' => '66h'),
            array('nome' => 'Filosofia', 'imagem' => 'filosofia.png', 'horas' => '100h'),
            array('nome' => 'Física', 'imagem' => 'fisica.png', 'horas' => '100h'),
            array('nome' => 'Geografia', 'imagem' => 'geografia.png', 'horas' => '66h'),
            array('nome' => 'Gestão Ambiental e Resp. Social', 'imagem' => 'gestaoamb.png', 'horas' => '66h'),
            array('nome' => 'História', 'imagem' => 'historia.png', 'horas' => '66h'),
            array('nome' => 'Português', 'imagem' => 'portugues.png', 'horas' => '66h'),
            array('nome' => 'Matemática', 'imagem' => 'matematica.png', 'horas' => '133h'),
            array('nome' => 'Química', 'imagem' => 'quimica.png', 'horas' => '100h'),
            array('nome' => 'Sociologia', 'imagem' => 'sociologia.png', 'horas' => '100h'),
            array('nome' => 'Tópicos Especiais em Administração', 'imagem' => 'topicosadmm.png', 'horas' => '100h'),
        );

        foreach ($disciplinas as $disciplina) {
            ?>
            <div class="item">
            <img src="images/<?php echo $disciplina['imagem']; ?>" alt="<?php echo $disciplina['nome']; ?>">
                <span><?php echo $disciplina['nome']; ?> - <?php echo $disciplina['horas']; ?></span>
            </div>
        <?php } ?>
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