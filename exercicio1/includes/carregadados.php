<?php 
if(isset($_POST) && !empty($_POST)){

    $descricao = $_POST['descricao'];
    $arquivo = $_POST['arquivo'];

    $data = [$descricao, $arquivo];

    $dados = json_encode($data);

    echo '<pre>';print_r($dados);echo '</pre>';
    //$json_output = json_decode($jsonReceivedata);
    //return $dados; 
}


if(isset($_GET) && !empty($_GET)){

    $descricao = $_GET['descricao'];
    $arquivo = $_GET['arquivo'];

    $data = [$descricao, $arquivo];

    $dados = json_encode($data);

    echo '<pre>';print_r($dados);echo '</pre>';
    //$json_output = json_decode($jsonReceivedata);
    //return $dados; 
}

?>