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
        <nav>
            <div style="display: flex; justify-content: space-between; position: center;padding: 1em">
            <span>Jogos Online</span>
            <ul>
                <li><a href="index.php">Menu</a></li>
                <li><a href="Jogos.php">Jogos</a></li>
                <li><a href="imagens.php">Imagens</a></li>
                <li><a href="ranking.php">Ranking</a></li>
                <li><a href="sobre.php">Sobre</a></li>
            </ul>
            <!--IGNORAR POR ENQUANTO-->
            <div style="margin-right: 3px;margin-top: 10px;">
                <form id="form-pesq" autocomplete="off" method="POST">
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui">
                    <button type="submit">Buscar</button>
                </form>
            </div>
            </div>
            
        </nav>
    </header>