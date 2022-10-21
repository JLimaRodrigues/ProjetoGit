<?php 
$conexao = new PDO('mysql:host=localhost;dbname=site_jogos;',Conexao::USER,Conexao::PASS);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conexao->prepare('SELECT * FROM usuario');
$stmt->execute();

$sql = $conexao->prepare(SELECT COUNT(*) AS "Cobrinha" FROM estatisca_jogos WHERE nome = 'Cobrinha');
$sql->execute();

?>