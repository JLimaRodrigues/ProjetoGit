function trocar_menu(){
    //PASSA O VALOR DO RADIO PRA UMA VARIÁVEL
    var valor = document.querySelector('input[name="opcao"]:checked').value;

    //ATRIBUO OS ID A VARIÁVEIS
    opcao1 = document.getElementById('opcao1')
    opcao2 = document.getElementById('opcao2')
    opcao3 = document.getElementById('opcao3')

    //TESTO UM DE CADA VEZ PRA APRESENTAR O VISÍVEL
    if(valor == 1){
        opcao1.style.display = 'block'
        opcao2.style.display = 'none'
        opcao3.style.display = 'none'
    } else if(valor == 2){
        opcao1.style.display = 'none'
        opcao2.style.display = 'block'
        opcao3.style.display = 'none'
    } else if(valor == 3){
        opcao1.style.display = 'none'
        opcao2.style.display = 'none'
        opcao3.style.display = 'block'
    } else {
        document.write('Erro')
    }
}

function avancar(){
    //ATRIBUO O ID A VARIÁVEL
    var botao = document.getElementById('avancar')
    //CHAMO UMA FUNCAO ATRAVÉS DO EVENTO ONCLICK
    botao.onclick = movimentacao()
}

function movimentacao(){
    //PASSA O VALOR DO RADIO PRA UMA VARIÁVEL
    var valor = parseInt(document.querySelector('input[name="opcao"]:checked').value);

    if(valor <= 3){
        //console.log(valor + 1);
        valor += 1
        document.querySelector('input[name="opcao"]:checked').value = valor
        console.log(valor)
    } else {
        console.log('erro')
    }
}

function retornar(){
    //ATRIBUO O ID A VARIÁVEL
    var botao = document.getElementById('retornar')
    //CHAMO UMA FUNCAO ATRAVÉS DO EVENTO ONCLICK
    botao.onclick = console.log('retornar')
}