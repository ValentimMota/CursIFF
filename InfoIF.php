<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFFar Santo Augusto</title>
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
<body>

    <header class="header">
        <div class="container">
            <h1>CursIFF</h1>
            <?php
            include 'navegaçao1.html';
            ?>
        </div>
    </header>

    <div class="main-content">
        <div class="container">
            <section id="sobre">
                <h2 class="section-title">Sobre a Escola</h2>
                <div class="card">
                    <div class="card-body">
                        <p>A Instituto Federal Farroupilha (IFFar) - Campus Santo Augusto é uma das unidades que compõem a rede de Institutos Federais no Brasil, e faz parte do Instituto Federal Farroupilha, uma instituição voltada para a oferta de educação profissional e tecnológica. Localizado na cidade de Santo Augusto, no Rio Grande do Sul, o campus desempenha um papel importante na formação de jovens e adultos na região, promovendo o desenvolvimento educacional, social e econômico.</p>
                    </div>
                </div>
            </section>

            <section id="cursos">
                <h2 class="section-title">Cursos Oferecidos</h2>
                <div class="card">
                    <div class="card-body">
                        <p>O campus de Santo Augusto oferece uma variedade de cursos nas modalidades presencial e a distância, atendendo a diferentes perfis de estudantes. Entre os cursos oferecidos, destacam-se os cursos técnicos integrados ao ensino médio, que permitem aos estudantes concluírem o ensino médio juntamente com uma formação técnica, e os cursos superiores de tecnologia e licenciatura.</p>
                        <p>Alguns dos cursos oferecidos incluem:</p>
                        <ul>
                            <li>Técnico em Agropecuária</li>
                            <li>Técnico em Informática</li>
                            <li>Técnico em Administração</li>
                            <li>Técnico em Alimentos</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Infraestrutura -->
            <section id="infraestrutura">
                <h2 class="section-title">Infraestrutura</h2>
                <div class="card">
                    <div class="card-body">
                        <p>A escola conta com laboratórios modernos, biblioteca, quadras esportivas, e um ambiente acolhedor para garantir o desenvolvimento completo dos alunos.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php
    include 'rodape.html';
    ?>

    <!-- JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net