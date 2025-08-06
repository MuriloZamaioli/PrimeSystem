<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime System</title>
    <link rel="stylesheet" href="css/cadastrar.css">
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
                        <h1 class="subtitulo-entrar">Acesse sua conta <br> agora mesmo.</h1>
                    </div>
                </div>
            </div>

            <div class="fundo-cadastrar">
                <div class="menu-cadastrar">
                    <h1 class="titulo-cadastrar">Crie um estoque para sua loja</h1>
                    <h2 class="subtitulo-cadastrar">Preencha seus dados</h2>
                    <form method="POST" class="form-cadastro" action="conexao/ClienteSalvar.php">
                        <div class="campo-cadastro">
                            <img src="imagens/icone-nome.png" alt="Usuario" class="icone-cadastro">
                            <input type="text" id="usuario" name="usuario" placeholder="Nome" class="texto-cadastro" required maxlenght="80">
                        </div>
                        <div class="campo-cadastro">
                            <img src="imagens/icone-email.png" alt="Email" class="icone-cadastro">
                            <input type="email" id="email" name="email" placeholder="Email" class="texto-cadastro" required maxlenght="80">
                        </div>
                        <div class="campo-cadastro">
                            <img src="imagens/icone-senha.png" alt="Senha" class="icone-cadastro">
                            <input type="password" id="senha" name="senha" placeholder="Senha" class="texto-cadastro" required maxlenght="32">
                        </div>
                        <div class="campo-simbolo">
                            <label for="simbolo">Escolha um símbolo:</label>
                            <select id="simbolo" name="token">
                                <option value="estrela">★ Estrela</option>
                                <option value="circulo">● Círculo</option>
                                <option value="triangulo">▲ Triângulo</option>
                                <option value="quadrado">■ Quadrado</option>
                                <option value="losango">◆ Losango</option>
                            </select>

                            <p>
                                <img src="imagens/simbolo-de-informacao.png" class="simbolo-info">
                                <span class="tooltip-text">O símbolo é utilizado para caso você precise recuperar sua senha</span>
                            </p>
                        </div>
                        <a class="link-botao-entrar">
                            <button type="submit" class="botao-cadastrar">
                                CADASTRAR
                            </button>
                        </a>
                    </form>
                    <a href="esqueciSenha.php" class="esqueci-senha">Esqueci minha senha</a>

                </div>
            </div>
        </div>
    </div>

</body>

</html>