<main>
        <h1>Ranking</h1>

        <div id="ranqueada">
            <table style="text-align: center; width: 100%">
                <tr>
                    <th>Posição</th>
                    <th>Nickname</th>
                    <th>Pontos</th>
                    <th>Data</th>
                    <th>Jogo Favorito</th>
                </tr>
                <?= $resultado; ?>
            </table>
        </div>
        

        <div id="grafico">
            <canvas id="grafico-jogo"></canvas>
        </div>
    </main>