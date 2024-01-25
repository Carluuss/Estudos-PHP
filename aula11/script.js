let chaveApoio = "";

function iniciar() {
  let chave = document.getElementById("chave").value;

  for (let i = 0; i < chave.length; i++) {
    chaveApoio += "?";
  }

  let palavra = document.getElementById("palavra");
  palavra.innerHTML = chaveApoio;

  let jogo = document.getElementById("cardJogo");
  jogo.classList.remove("d-none");
  let cardIniciar = document.getElementById("cardInicio");
  cardIniciar.classList.add("d-none");
}

function limparCampos() {
  letra = document.getElementById("letra").value = "";
}

let tentativas = 6;
function verificar() {
  let chave = document.getElementById("chave").value;
  let letra = document.getElementById("letra").value;
  let mostrarT = document.getElementById("mostrarTentativas");
  let lista = document.getElementById("listaLetras");
  let itens = document.createElement("li");

  encontrou = false;
  for (let i = 0; i < chave.length; i++) {
    if (letra == chave[i]) {
      encontrou = true;
      chaveApoio =
      chaveApoio.substring(0, i) + letra + chaveApoio.substring(i + 1);
    }
  }
  
  
  // !chave.includes(letra) ? tentativas-- : "";
  
  if(!encontrou){
    tentativas--;
    mudarImagem();
  }

  if (chaveApoio == chave) {
    alert("PARABÉNS!!");
    location.reload();
  } else if (tentativas == 0) {
    alert("VOCE PERDEU!");
    location.reload();
  }
  
  let palavra = document.getElementById("palavra");
  palavra.innerHTML = chaveApoio;
  mostrarT.innerHTML = `Tentativas: ${tentativas}`;
  itens.textContent = letra;
  lista.appendChild(itens);
  limparCampos();

  
}

let img = document.getElementById("imagem");

function mudarImagem(){
  switch(tentativas){
    case 6: img.src = "./image/jogo-da-forca6.png"; break;
    case 5: img.src = "./image/jogo-da-forca5.png"; break;
    case 4: img.src = "./image/jogo-da-forca4.png"; break;
    case 3: img.src = "./image/jogo-da-forca3.png"; break;
    case 2: img.src = "./image/jogo-da-forca2.png"; break;
    case 1: img.src = "./image/jogo-da-forca1.png"; break;
    case 0: img.src = "./image/jogo-da-forca.png"; break;
  }
  
}

function reiniciar(){
  location.reload(true);
}
