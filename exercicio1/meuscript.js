function trocar_menu(){
    var valor = document.querySelector('input[name="opcao"]:checked').value;

    opcao1 = document.getElementById('opcao1')
    opcao2 = document.getElementById('opcao2')
    opcao3 = document.getElementById('opcao3')

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