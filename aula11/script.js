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

let tentativas = 5;
function verificar() {
  let chave = document.getElementById("chave").value;
  let letra = document.getElementById("letra").value;
  let mostrarT = document.getElementById("mostrarTentativas");
  let lista = document.getElementById("listaLetras");
  let itens = document.createElement("li");

  for (let i = 0; i < chave.length; i++) {
    if (letra == chave[i]) {
      chaveApoio =
      chaveApoio.substring(0, i) + letra + chaveApoio.substring(i + 1);
    }
  }
  
  !chave.includes(letra) ? tentativas-- : "";
  
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

function reiniciar(){
  location.reload(true);
}
