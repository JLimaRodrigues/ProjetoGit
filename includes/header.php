<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= TITLE ?></title>
    <!--Meu CSS-->
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>
            <div>
                <span>Jogos Online</span>
            </div>
            <div>
                <ul class="lista-cabecalho">
                    <li><a href="index.php">Menu</a></li>
                    <li><a href="Jogos.php">Jogos</a></li>
                    <li><a href="imagens.php">Imagens</a></li>
                    <li><a href="ranking.php">Ranking</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                </ul>
            </div>
            <!--IGNORAR POR ENQUANTO-->
            <div id="form-pesquisa">
                <form id="form-pesq" autocomplete="off" method="POST">
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui">
                    <button type="submit">Buscar</button>
                </form>
            </div>
            </div>
    </header>