<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime System</title>
    <link rel="stylesheet" href="css/entrar.css">
</head>

<body>
    <?php
        include "conexao/conexao.php";
    ?>
    <div class="tela-login">
        <div class="fundo-login">
            <div class="fundo-entrar">
                <div class="menu-entrar">
                    <img src="imagens/logo.png" alt="logo" class="logo">
                    <div class="descricao-entrar">
                        <h1 class="titulo-entrar">Bem-Vindo(a)</h1>
                        <h1 class="subtitulo-entrar">Não possui conta? Crie já!</h1>
                        <button type="button" class="botao-cadastrar">
                            <a class="link-botao-entrar" href="cadastrar.php">CRIAR CONTA</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="fundo-cadastrar">
                <div class="menu-cadastrar">
                    <h1 class="titulo-cadastrar">Entre na sua conta</h1>
                    <h2 class="subtitulo-cadastrar">Preencha seus dados</h2>
                    <form action="conexao/validar.php" method="POST" class="form-cadastro">
                        <div class="campo-cadastro">
                            <img src="imagens/icone-email.png" alt="Email" class="icone-cadastro">
                            <input type="email" id="email" name="email" placeholder="Email" class="texto-cadastro"
                                required>
                        </div>
                        <div class="campo-cadastro">
                            <img src="imagens/icone-senha.png" alt="Senha" class="icone-cadastro">
                            <input type="password" id="senha" name="senha" placeholder="Senha" class="texto-cadastro"
                                required>
                        </div>
                        <button type="submit" class="botao-entrar">
                        <a class="link-botao-entrar">ENTRAR</a>
                    </button>
                    </form>
                    
                    <a href="#" class="esqueci-senha">Esqueci minha senha</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>