//Controle das Imagens do Site de Jogos

const controle = document.getElementById('controle')
const c = controle.getContext('2d')

var imagem = new Image();
imagem.src = 'imagens/controle.png';
imagem.onload = function() {

    // Desenhar as imagens
    c.drawImage(imagem, 300, 20, 600, 320);

}

//RECT (lateral, altura, largura, altura)
//ARC (lateral, altura, diametro, raio)

//LADO ESQUERDO DO CONTROLE 
// c.beginPath()
// c.arc(250,300,130,0,2*3.14)
// c.fill()

// //MEIO
// c.fillRect(300, 200, 400, 200);

// //LADO DIREITO DO CONTROLE
// c.beginPath()
// c.arc(750,300,130,0,2*3.14)
// c.fill()

// criarBotao(756,235,'red')
// criarBotao(821,300,'blue')
// criarBotao(697,300,'green')
// criarBotao(756,370,'orange')

// //FUNÇÃO RESPONSÁVEL POR CRIAR JOYSTICK
// function criarJoystick(){

// }

// //FUNÇÃO RESPONSÁVEL POR CRIAR BOTÕES
// function criarBotao(x,y,cor){
//     //BOTÃO 
//     c.fillStyle=cor
//     c.beginPath()
//     c.arc(x,y,25,0,2*3.14)
//     c.fill()

//     //CONTORNO
//     c.lineWidth = 3;
//     c.strokeStyle = 'rgb(248, 248, 255)';
//     c.stroke();
// }



// function clicou(evento){
//     var x = evento.pageX - controle.offsetLeft
//     var y = evento.pageY - controle.offsetTop

//     // c.fillStyle = "blue"
//     // c.beginPath()
//     // c.arc(x,y,10,0,2*3.14)
//     // c.fill()

//     if(x>=732 && (y>=215 && y<=257)){//TRIANGULO
//         console.log('triangulo')
//     } else if(x>=800 && (y>=275 && y<=317)){//QUADRADO
//         avancar()
//     } else if(x>=697 && (y>=300)){//BOLA
//         console.log('bola')
//     } else if(x>=756 && (y>=370)){//X
//         console.log('x')
//     }

//     console.log("posição do clique : "+ x +" e "+ y)
// }

// controle.onclick = clicou