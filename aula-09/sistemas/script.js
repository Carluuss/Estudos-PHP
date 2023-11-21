function V_produto(campo){
    if (campo.value.trim() == ''){
        document.getElementById('alertaProduto').innerHTML='*Campo obrigatorio';
        document.getElementById('alertaProduto').style.color='red';
    }else{
        document.getElementById('alertaProduto').innerHTML ='';
    }
   
}

function V_valor(campo){
    if (campo.value.trim() == ''){
        document.getElementById('alertaValor').innerHTML='*Campo obrigatorio';
        document.getElementById('alertaValor').style.color='red';
    }else if(campo.value < 0){
        document.getElementById('alertaValor').innerHTML='*O valor não pode ser negativo';
        document.getElementById('alertaValor').style.color='red';
        campo.value = '';
    }

    else{
        document.getElementById('alertaValor').innerHTML ='';
    }
}

function V_quantidade(campo){
    if (campo.value.trim() == ''){
        document.getElementById('alertaQuantidade').innerHTML='*Campo obrigatorio';
        document.getElementById('alertaQuantidade').style.color='red';
    }else if(campo.value < 0){
        document.getElementById('alertaQuantidade').innerHTML='*O valor não pode ser negativo';
        document.getElementById('alertaQuantidade').style.color='red';
        campo.value = '';
    }
    else{
        document.getElementById('alertaQuantidade').innerHTML ='';
    }
}

function V_validade(campo){
    if (campo.value.trim() == ''){
        document.getElementById('alertaValidade').innerHTML='*Campo obrigatorio';
        document.getElementById('alertaValidade').style.color='red';
    }else{
        document.getElementById('alertaValidade').innerHTML ='';
    }
}

function V_cadastro(){
    p = document.getElementById('produto');
    v = document.getElementById('valor');
    q = document.getElementById('quantidade');
    d = document.getElementById('data');
    V_produto(p);
    V_valor(v);
    V_quantidade(q);
    V_validade(d);
}