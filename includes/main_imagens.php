<main>
        <div id="apresentacao_imagens">
            <h1>Imagens</h1>
    
            <p id="opcao1">
                <img class="imagens" src="imagens/among.png" alt="amog us" title="among us">
                <img class="imagens" src="imagens/jogo_carro.png" alt="jogo de carro" title="jogo de carro">
                <img class="imagens" src="imagens/subway.png" alt="subway" title="subway surfers">
            </p>
    
            <p id="opcao2" style="display: none;">
                <img class="imagens" src="imagens/subway.png" alt="amog us" title="among us">
                <img class="imagens" src="imagens/among.png" alt="jogo de carro" title="jogo de carro">
                <img class="imagens" src="imagens/jogo_carro.png" alt="subway" title="subway surfers">
            </p>
    
            <p id="opcao3" style="display: none;">
                <img class="imagens" src="imagens/jogo_carro.png" alt="amog us" title="among us">
                <img class="imagens" src="imagens/among.png" alt="jogo de carro" title="jogo de carro">
                <img class="imagens" src="imagens/subway.png" alt="subway" title="subway surfers">
            </p>
    
    
            <div class="acoes">
                <a>
                    <button id="retornar" onclick="retornar()">&lt;</button>
                </a>
                <input type="radio" name="opcao" value="1" onchange="trocar_menu()" checked>
                <input type="radio" name="opcao" value="2" onchange="trocar_menu()">
                <input type="radio" name="opcao" value="3" onchange="trocar_menu()">
                <a>
                    <button id="avancar" onclick="avancar()">&gt;</button>
                </a>
            </div>
        </div>

        <div>
            <canvas id="controle" width="1200" height="800"></canvas>
        </div>
    </main>