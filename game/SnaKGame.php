<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="*Bruno Carvalho Feitosa* & Victor Augusto & Jailson Evangelista Teixeira" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Sistema desenvolvido em HTML5, CSS3, JavaScript, PHP e MySQL para o curso de Análise e Desenvolvimento de Sistemas" />
    <link rel="icon" href="../images/fav.png" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylemobilegame.css">
    <title>SnaKGame</title>

    <?php 
      error_reporting(E_ALL);
      ini_set('display_errors',0);
      session_start();
            if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
      }

      $logado = $_SESSION['login'];
      ?>
</head>

<body>
    <!-- Header -->
    <header class="wrap">
        <h1>SnaKGame</h1>
    </header>
    <canvas class="wrap" id="snake" width="500" height="400" tabindex="1"></canvas>

    <!-- Tela de Game Over -->
    <div id="gameover">
        <h2>Game Over</h2>
        <p>Aperte <span style="background-color: #FFFFFF; color: #000000">espaço</span> para começar um</p>
        <a id="newgame_gameover">Novo Jogo</a>
        <a id="setting_gameover">Configurações</a>
        <a id="developers_menu" href="../desenvolvedores.php">Desenvolvedores</a>
    </div>

    <!-- Tela de Configurações -->
    <div id="setting">
        <h2>Settings</h2>

        <a id="newgame_setting">Novo Jogo</a>

        <p>Velocidade:
            <input id="speed1" type="radio" name="speed" value="120" checked/>
            <label for="speed1">Lento</label>
            <input id="speed2" type="radio" name="speed" value="75" />
            <label for="speed2">Normal</label>
            <input id="speed3" type="radio" name="speed" value="35" />
            <label for="speed3">Rápido</label>
        </p>

        <p>Parede:
            <input id="wallon" type="radio" name="wall" value="1" checked/>
            <label for="wallon">On</label>
            <input id="walloff" type="radio" name="wall" value="0" />
            <label for="walloff">Off</label>
        </p>
    </div>

    <!-- Tela de Configurações -->
    <div id="developers">
        <h2>Developers</h2>
        <a id="newgame_developers">Novo Jogo</a>
    </div>

    <!-- Menu -->
    <div id="menu">
        <h2>SnaKGame</h2>
        <a id="newgame_menu">Novo Jogo</a>
        <a id="setting_menu">Configurações</a>
        <a id="developers_menu" href="../desenvolvedores.php">Desenvolvedores</a>
    </div>

    <!-- Seção Usuário -->
    <div class="section-User">
        <div class="grid-container">

            <!-- Usuário -->
            <div class="grid-item">
                <img src="../images/iconeUsuario.png" title="Usuário" alt="Ícone Usuário" class="icons" />
                <br>
                <?php
                    echo "<p id='nameUser'>$logado</p>";
                ?>
            </div>

            <!-- Placar -->
            <div class="grid-item">
                <img src="../images/iconePlacar.png" title="Placar" alt="Ícone Placar" class="icons" />
                <br>
                <p id="scoreUser">Pontos: <span id="score_value">0</span></p>
            </div>

            <!-- Finalizar Seção Usuário -->
            <div class="grid-item"><img src="../images/iconeSair.png" title="Sair" alt="Ícone Sair" class="icons" />
                <br>
                <a href="../php/processaLogoff.php">
                    <input type="button" value="Sair" id="btnSair" name="btnSair" />
                </a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="./js/index.js"></script>
</body>

</html>