function V_nome(campo) {
  if (campo.value.trim() == "") {
    document.getElementById("alertaNome").innerHTML = "*Campo obrigatorio";
    document.getElementById("alertaNome").style.color = "red";
  } else {
    document.getElementById("alertaNome").innerHTML = "";
  }
}

function V_cpf(campo) {
  if (campo.value.trim() == "") {
    document.getElementById("alertaCPF").innerHTML = "*Campo obrigatorio";
    document.getElementById("alertaCPF").style.color = "red";
  } else {
    document.getElementById("alertaCPF").innerHTML = "";
  }
}

function V_dataNascimento(campo) {
  if (campo.value.trim() == "") {
    document.getElementById("alertaDataNascimento").innerHTML =
      "*Campo obrigatorio";
    document.getElementById("alertaDataNascimento").style.color = "red";
  } else {
    document.getElementById("alertaDataNascimento").innerHTML = "";
  }
}

function V_cadastrar() {
  n = document.getElementById("nome");
  c = document.getElementById("cpf");
  d = document.getElementById("dataNascimento");
  V_nome(n);
  V_cpf(c);
  V_dataNascimento(d);
}

function formatCPF(campo){
    let cpf = campo.value.replace(/\D/g, '');
    cpf = cpf.substring(0,11);
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    campo.value = cpf;
}