<?php
include_once("head.php");

echo"
<body>

<div class='card container mt-3 mb-3'>
    <div class='mt-2'>
    <h2 style= 'text-align: center;'
    class='mt-1'>CRIAR CONTA BANCÁRIA</h2>
</div>

<form action='criarConta.php' method='POST'>
<div class='mb-3'>
<label class='form-label'>Agência*</label>
<input type='text' class='form-control' id='agencia' name='agencia' onblur='V_agencia(this)' required>
<div id= 'alertaAgencia' class='form-text'>
</div>


<div class='mb-3'>
<label class='form-label'>Conta*</label>
<input type='text' class='form-control' id='conta' name='conta' onblur='V_conta(this)' oninput='formatConta(this)' required>
<div id= 'alertaConta' class='form-text'></div>
</div>

<div class='mb-3'>
<label class='form-label'>Senha*</label>
<input type='text' class='form-control' id='senha' name='senha' onblur='V_senha(this)' required>
<div id='alertaSenha' class='form-text'>
</div>
</div>

<div class='mb-3'>
    <input type='submit' class='btn btn-primary' value='Criar' onclick='V_criar()'>
</div>
</form>
</div>
</body>
"
?>