<?php 
require __DIR__.'/vendor/autoload.php';

/*
//$query = 'SELECT uj.id, uj.nickname, uj.pontos, uj.jogo_fav, pl.nome, pl.id  FROM usuario_jogo uj INNER JOIN jogo pl ON pl.id = uj.id';

$consulta = ;

$resultado = '';
for($i = 0; $i < count($consulta);$i++){
    $resultado .= '<tr>
                        <td>'.$consulta[$i]->id.'</td>
                        <td>'.$consulta[$i]->nickname.'</td>
                        <td>'.($consulta[$i]->pontos == null ? '0': $consulta[$i]->pontos).'</td>
                        <td>'.$consulta[$i]->tempo.'</td>
                        <td>'.$consulta[$i]->nome.'</td>
                </tr>';
}
*/
define('TITLE', 'Ranking');

include 'includes/header.php';
include 'includes/main_ranking.php';
include 'includes/aside.php';
include 'includes/footer.php';

?>