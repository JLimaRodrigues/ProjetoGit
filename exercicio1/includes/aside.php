<?php 

$dados = [
    ['tempo'=>'20:38:10','jogo'=>'Mata-Mosquito','data'=>'12/10/2022'],
    ['tempo'=>'10:20:40','jogo'=>'Cobrinha','data'=>'09-10-2022'],
    ['tempo'=>'20:38:10','jogo'=>'Tiro ao Alvo','data'=>'15-09-2022']
];


$array = ['primeiro-ranking', 'segundo-ranking', 'terceiro-ranking'];
$canvas = ['primeiro-do-ranking', 'segundo-do-ranking','terceiro-do-ranking']

?>

<aside style="align-items: center;text-align: center;">
        <h1>Gráficos Individuais</h1>

        <div class="tabela">
            <table id="tabela-ranqueada">
                <tr>
                    <th>Ranking</th>
                    <th>NickName</th>
                    <th>Pontos</th>
                </tr>
                <tr onclick="mostrar_status(1)">
                    <td>1°</td>
                    <td id="primeiro">RodriguesJfl</td>
                    <td>3</td>
                </tr>
                <tr onclick="mostrar_status(2)">
                    <td>2°</td>
                    <td id="segundo">xCHx</td>
                    <td>2</td>
                </tr>
                <tr onclick="mostrar_status(3)">
                    <td>3°</td>
                    <td id="terceiro">StraikerRj</td>
                    <td>1</td>
                </tr>
            </table>
        <div>

        <?php 
        for($i = 0; $i < count($array); $i++){
            echo '<div id="'.$array[$i].'" class="card">
                <h2>Dados do Jogador</h2>
                    <p class="dados-jogador">Tempo Jogado: '.$dados[$i]['tempo'].'</p>
                    <p class="dados-jogador">Jogo preferido: '.$dados[$i]['jogo'].'</p>
                    <p class="dados-jogador">Última atividade: '.$dados[$i]['data'].'</p>
            <canvas id="'.$canvas[$i].'"></canvas>
            <button class="botao-ocultar" type="button" onclick="ocultar_tudo()">Ocultar</button>
          </div>';
        };
        ?>


    </aside>