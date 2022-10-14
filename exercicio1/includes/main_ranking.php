<?php 
$resultado = '';

$dados = [
    ['id'=>1,'nome'=>'RodriguesJfl','pontos'=>3,'data'=>'12/10/2022'],
    ['id'=>2,'nome'=>'xChx','pontos'=>2,'data'=>'09-10-2022'],
    ['id'=>3,'nome'=>'StraikerRj','pontos'=>1,'data'=>'15-09-2022'],
    ['id'=>4,'nome'=>'DutraSantos','pontos'=>0,'data'=>'12/10/2022']
];

foreach($dados as $key=>$dado){
    $resultado .= '<tr>
                        <td>'.$dado['id'].'</td>
                        <td>'.$dado['nome'].'</td>
                        <td>'.$dado['pontos'].'</td>
                        <td>'.$dado['data'].'</td>
                </tr>'; 
}

?>

<main>
        <h1>Ranking</h1>

        <div id="ranqueada">
            <table style="text-align: center; width: 100%">
                <tr>
                    <th>Posição</th>
                    <th>Nickname</th>
                    <th>Pontos</th>
                    <th>Data</th>
                </tr>
                <?= $resultado; ?>
            </table>
        </div>
        

        <div id="grafico">
            <canvas id="grafico-jogo"></canvas>
        </div>
    </main>