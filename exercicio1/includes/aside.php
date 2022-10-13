<aside style="align-items: center;">
        <h1>Gráficos Individuais</h1>

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

        <div id="primeiro-ranking" class="card">
            <h2>Dados do Jogador</h2>
            <p>Tempo Jogado: 20:38:10</p>
            <p>Jogo preferido: Mata Mosquito</p>
            <p>Última atividade: Hoje</p>
            <canvas id="primeiro-do-ranking"></canvas>
            <button type="button" onclick="ocultar_tudo()">Ocultar</button>
        </div>

        <div id="segundo-ranking" class="card">
            <h2>Dados do Jogador</h2>
            <p>Tempo Jogado: 10:20:40</p>
            <p>Jogo preferido: Tiro ao Alvo</p>
            <p>Última atividade: Ontem</p>
            <canvas id="segundo-do-ranking"></canvas>
            <button type="button" onclick="ocultar_tudo()">Ocultar</button>
        </div>

        <div id="terceiro-ranking" class="card">
            <h2>Dados do Jogador</h2>
            <p>Tempo Jogado: 5:00:32</p>
            <p>Jogo preferido: Cobrinha</p>
            <p>Última atividade: Quase um mês</p>
            <canvas id="terceiro-do-ranking"></canvas>
            <button type="button" onclick="ocultar_tudo()">Ocultar</button>
        </div>


    </aside>