window.onload = init()

function init(){
    return ocultar_tudo();
}

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
    var valor = document.querySelector('input[name="opcao"]:checked').value;
    //console.log(valor)

    //PASSA O VALOR DO RADIO PRA UMA VARIÁVEL
    var radios = document.getElementsByName("opcao");

    //console.log(radios[0].value)
    //console.log(radios[1].value)
    //console.log(radios[2].value)
    
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].value == valor) {
            i += 1;
            console.log(radios[i].value)
            radios[i].checked = true;
            break;
        } else {
            console.log('erro');
        }
}

valor = "";
radios = "";
}

function retornar(){
        //PASSA O VALOR DO RADIO PRA UMA VARIÁVEL
        var valor = document.querySelector('input[name="opcao"]:checked').value;
        //console.log(valor)
    
        //PASSA O VALOR DO RADIO PRA UMA VARIÁVEL
        var radios = document.getElementsByName("opcao");
    
        //console.log(radios[0].value)
        //console.log(radios[1].value)
        //console.log(radios[2].value)
        
        for (var i = 0; i < radios.length; i++) {
            if ((radios[i].value == valor) && (radios[i].value > 0)) {
                i -= 1;
                console.log(radios[i].value)
                radios[i].checked = true;
                break;
            } else {
                //console.log('erro');
            }
    }
    
    valor = "";
    radios = "";
}

function mostrar_status(id){
    var usuario = id;
    var primeiro = document.getElementById('primeiro-ranking');
    var segundo = document.getElementById('segundo-ranking');
    var terceiro = document.getElementById('terceiro-ranking');

        if(usuario == 1){
            console.log('primeiro')
            primeiro.style.display = 'block';
            segundo.style.display = 'none';
            terceiro.style.display = 'none';
        } else if (usuario == 2){
            console.log('segundo')
            primeiro.style.display = 'none';
            segundo.style.display = 'block';
            terceiro.style.display = 'none';
        } else if(usuario == 3){
            console.log('terceiro')
            primeiro.style.display = 'none';
            segundo.style.display = 'none';
            terceiro.style.display = 'block';
        } else {
            console.log('erro')
        }
}

function ocultar_tudo(){
    var primeiro = document.getElementById('primeiro-ranking');
    var segundo = document.getElementById('segundo-ranking');
    var terceiro = document.getElementById('terceiro-ranking');

    array = [];

    primeiro != null ? array.push(primeiro) : ''
    segundo != null ? array.push(segundo) : ''
    terceiro != null ? array.push(terceiro) : ''

    for(i=0;i<array.length;i++){
        array[i].style.display = 'none';
    }
}