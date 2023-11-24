function V_nome(campo) {
    if (campo.value.trim() == "") {
      document.getElementById("alertaNome").innerHTML = "*Campo obrigatorio";
      document.getElementById("alertaNome").style.color = "red";
    } else {
      document.getElementById("alertaNome").innerHTML = "";
    }
  }

function V_curso(campo) {
    if (campo.value.trim() == "") {
      document.getElementById("alertaCurso").innerHTML = "*Campo obrigatorio";
      document.getElementById("alertaCurso").style.color = "red";
    } else {
      document.getElementById("alertaCurso").innerHTML = "";
    }
  }

function V_idade(campo) {
    if (campo.value.trim() == "") {
      document.getElementById("alertaIdade").innerHTML = "*Campo obrigatorio";
      document.getElementById("alertaIdade").style.color = "red";
    } else {
      document.getElementById("alertaIdade").innerHTML = "";
    }
  }