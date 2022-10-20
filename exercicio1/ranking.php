<?php 
use \App\Model\Conexao;

require __DIR__.'/vendor/autoload.php';


 $resultado='';
try {
    $conexao = new PDO('mysql:host=localhost;dbname=site_jogos;',Conexao::USER,Conexao::PASS);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conexao->prepare('SELECT * FROM usuario');
    $stmt->execute();

    while($row = $stmt->fetch()) {
        $resultado .= '<tr>
                                <td>'.$row['id_usuario'].'</td>
                                <td>'.$row['nickname'].'</td>
                                <td>'.($row['pontos'] == null ? '0': $row['pontos']).'</td>
                                <td>'.$row['ultima_atualizacao'].'</td>
                                <td>'.$row['jogo_favorito'].'</td>
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