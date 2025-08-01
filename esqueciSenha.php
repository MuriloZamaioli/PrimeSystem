<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime System</title>
    <link rel="stylesheet" href="esqueciSenha.css">
</head>

<body>
    <div class="tela-login">
        <div class="fundo-login">
            <div class="fundo-entrar">
                <div class="menu-entrar">
                    <img src="imagens/logo.png" alt="logo" class="logo">
                    <div class="descricao-entrar">
                        <h1 class="titulo-entrar">Recuperar Acesso</h1>
                        <h1 class="subtitulo-entrar">Crie uma nova senha<br> agora mesmo.</h1>
                        <a class="link-botao-entrar" href="inicio.html">

                        </a>

                    </div>
                </div>
            </div>
            <div class="fundo-cadastrar">
                <div class="menu-cadastrar">
                    <h1 class="titulo-cadastrar">Redefina sua senha</h1>
                    <h2 class="subtitulo-cadastrar">Preencha seus dados</h2>
                    <form action="conexao/validar.php" method="POST" class="form-cadastro ">
                        <div class="campo-cadastro">
                            <img src="imagens/icone-nome.png" alt="Usuario" class="icone-cadastro">
                            <input type="text" id="usuario" name="usuario" placeholder="Nome" class="texto-cadastro" required maxlenght="80">
                        </div>
                        <div class="campo-cadastro">
                            <img src="imagens/icone-email.png" alt="Email" class="icone-cadastro">
                            <input type="email" id="email" name="email" placeholder="Email" class="texto-cadastro" required maxlenght="80">
                        </div>
                        <div class="campo-simbolo">
                            <label for="simbolo" >Símbolo escolhido:</label>
                            <select id="simbolo" name="token" required>
                                <option value="estrela">★ Estrela</option>
                                <option value="circulo">● Círculo</option>
                                <option value="triangulo">▲ Triângulo</option>
                                <option value="quadrado">■ Quadrado</option>
                                <option value="losango">◆ Losango</option>
                            </select>
                        </div>
                        <button type="submit" class="botao-cadastrar">
                            <a class="link-botao-entrar">REDEFINIR</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>