<?php 
require __DIR__.'/vendor/autoload.php';

use \App\Model\Usuario;

//OBJeTO
$consulta = Usuario::getUsuarios();

//VALIDAÇÃO DO POST
if(isset($_POST['nickname'])){
    $objUsuario->nickname  = $_POST['nickname'];

    for($i = 0; $i < count($consulta);$i++){
        if($consulta[$i]->nickname == $objUsuario->nickname){
            echo 'alert("te achei '.$objUsuario->nickname.'")';
        } else {
            continue;
        }
    }

    //echo '<pre>';print_r($objUsuario);echo'</pre>'; exit;
    //$objUsuario->atualizar();

    //header('location: controleusuarios.php?status=success');
    //exit;

}

$resultado = '';
for($i = 0; $i < count($consulta);$i++){
    $resultado .= '<option>'.$consulta[$i]->nickname.'</option>';
}


define('TITLE', 'Jogos');

include 'includes/header.php';
include 'includes/main_jogos.php';
include 'includes/aside.php';
include 'includes/footer.php';

?>