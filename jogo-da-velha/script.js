velha = [
  ["", "", ""],
  ["", "", ""],
  ["", "", ""]
];

jogada = 0; //Quantidade de jogadas realizadas
maxJogadas = 9; //número máximo de jogadas
quemJoga = 1; // representa o jogador1 ou jogador2
venceu = false; //variável de controle de vitória

function jogar (){
    linha = document.getElementById("linha").value;
    coluna = document.getElementById("coluna").value;
    if(jogada < maxJogadas && venceu == false){
        if(velha[linha][coluna] == ""){
            if(quemJoga == 1){
                velha[linha][coluna] = "X";
                quemJoga = 2;
            }else{
                velha[linha][coluna] = "O";
                quemJoga = 1;
            }
            jogada++;
        }else{
            alert("Linha e/ou Coluna inválidas");
        }
        tela();
        //venceu = verificar();
    }
    if(venceu){
    btnJogar = document.getElementById("btnJogar");
    btnJogar.classList.add("d-none");
    btnReiniciar = document.getElementById("btnReiniciar");
    btnReiniciar.classList.remove("d-none");
    }
}

function tela(){
    for(i = 0; i < 3; i++){
        for(j = 0; j < 3; j++){
            celula = document.getElementById("l" + i + "c" + j);
            celula.value = velha[i][j];
        }
    }    
}