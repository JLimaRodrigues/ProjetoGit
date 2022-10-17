<?php 
use \App\Model\Conexao;

require __DIR__.'/vendor/autoload.php';


 $resultado='';
try {
    $conexao = new PDO('mysql:host=localhost;dbname=teste;',Conexao::USER,Conexao::PASS);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conexao->prepare('SELECT uj.id, uj.nickname, uj.pontos, uj.jogo_fav, uj.tempo, pl.nome, pl.id  FROM usuario_jogo uj INNER JOIN jogo pl ON pl.id = uj.id');
    $stmt->execute();

    while($row = $stmt->fetch()) {
        $resultado .= '<tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['nickname'].'</td>
                                <td>'.($row['pontos'] == null ? '0': $row['pontos']).'</td>
                                <td>'.$row['tempo'].'</td>
                                <td>'.$row['nome'].'</td>
                        </tr>';
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


define('TITLE', 'Ranking');

include 'includes/header.php';
include 'includes/main_ranking.php';
include 'includes/aside.php';
include 'includes/footer.php';

?>