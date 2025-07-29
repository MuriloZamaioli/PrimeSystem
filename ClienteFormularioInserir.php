<?php
#formulário de cadastro
?>

<h1>Cadastro</h1>
<form nome="cadastro" method="post" action="ClienteSalvar.php">
    Nome: <input type="text" name="nome" required maxlength="200"><br>
    E-mail: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Cadastrar cliente</button>


</form>