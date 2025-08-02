<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: esqueciSenha.php");
    exit();
}
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prime System</title>
    <link rel="stylesheet" href="css/redefineSenha.css" />
</head>
<body>
    <div class="tela-login">
        <div class="fundo-login">
            <div class="fundo-entrar">
                <div class="menu-entrar">
                    <img src="imagens/logo.png" alt="logo" class="logo" />
                    <div class="descricao-entrar">
                        <h1 class="titulo-entrar">Recuperar Acesso</h1>
                        <h1 class="subtitulo-entrar">Crie uma nova senha<br /> agora mesmo.</h1>
                    </div>
                </div>
            </div>
            <div class="fundo-cadastrar">
                <div class="menu-cadastrar">
                    <h1 class="titulo-cadastrar">Redefina sua senha</h1>
                   <p class="titulo-redefine">Redefinindo senha do cadastro:</p>
                    <p class="titulo-redefine"><strong><?= htmlspecialchars($email) ?></strong></p>
                    <form action="conexao/ClienteRedefine.php" method="POST" class="form-cadastro">
                        <div class="campo-cadastro">
                            <img src="imagens/icone-senha.png" alt="Senha" class="icone-cadastro" />
                            <input type="password" id="senha" name="senha" placeholder="Senha" class="texto-cadastro" required maxlength="32" />
                        </div>
                        <div class="campo-cadastro">
                            <img src="imagens/icone-senha.png" alt="Confirme a senha" class="icone-cadastro" />
                            <input type="password" id="confirmaSenha" name="confirmaSenha" placeholder="Confirme a senha" class="texto-cadastro" required maxlength="32" />
                        </div>
                        <button type="submit" class="botao-cadastrar">REDEFINIR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
