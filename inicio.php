<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Prime System</title>
  <link rel="stylesheet" href="css/inicio.css" />
  <style>
    /* Estilo do modal */
    .modal {
      display: none;
      /* Escondido por padrão */
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
    }

    .modal-content {
      background-color: #fff;
      margin: 15% auto;
      padding: 20px;
      width: 50%;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      position: relative;
    }

    .close {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 24px;
      font-weight: bold;
      color: #aaa;
      cursor: pointer;
    }

    .close:hover {
      color: #000;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      margin-top: 20px;
    }
  </style>
</head>

<body id="top">
  <div id="divpai">
    <!-- Cabeçalho -->
    <header class="cabecalho" id="cabecalho">
      <div class="cabecalho-conteudo">
        <img src="imagens/logo.png" alt="Logo Prime System" class="logo" />

        <nav class="menu-esquerda">
          <a href="#top" class="menu-cabecalho">Início</a>
          <a href="#secao2" class="menu-cabecalho">Serviços</a>
          <a href="#secao3" class="menu-cabecalho">Sobre</a>
          <a href="#secao4" class="menu-cabecalho">Contatos</a>
        </nav>
        <a href="cadastrar.php" class="menu-cabecalho entrar">Criar Estoque</a>
        <a href="#" class="menu-cabecalho download">Download</a>
      </div>
    </header>

    <!-- Conteúdo principal -->
    <main>

      <!-- Seção Início -->
      <h1 class="titulo inicio" id="secao1">Início</h1>
      <div class="banner">
        <img src="imagens/banner.png" alt="Banner Principal" class="img-banner" />
        <div class="menu-inicio">
          <div class="caixa-inicio">
            <p class="texto">
              Simplifique a gestão da sua empresa com PrimeSystem. Controle, organização e resultados em um só lugar.
            </p>
          </div>
        </div>
      </div>

      <!-- Seção Serviços -->
      <h1 class="titulo" id="secao2">Serviços</h1>
      <div class="menu">
        <div class="caixa-servicos">
          <p class="texto">
            Tudo o que sua empresa precisa para crescer. Automatize tarefas, ganhe tempo e tome decisões com segurança.
          </p>
        </div>
        <div class="fundo-imagem">
          <img src="imagens/serviços.png" class="imagens" />
        </div>
      </div>
      <div class="botao-teste">
        <a href="#" class="texto-botao-teste">Teste Já</a>
      </div>

      <!-- Seção Sobre Nós -->
      <h1 class="titulo" id="secao3">Sobre Nós</h1>
      <div class="menu">
        <div class="fundo-imagem">
          <img src="imagens/sobrenos1.png" class="imagens" />
        </div>
        <div class="caixa-sobrenos1">
          <p class="texto">
            Somos especialistas em soluções inteligentes para gestão de estoque. Nossa missão é transformar a forma como
            empresas controlam, organizam e otimizam seus inventários, oferecendo tecnologia de ponta.
          </p>
        </div>
      </div>
      <div class="menu">
        <div class="caixa-sobrenos2">
          <p class="texto">
            Nosso foco é reduzir perdas, aumentar a produtividade e proporcionar visibilidade total dos seus produtos em
            tempo real.
          </p>
        </div>
        <div class="fundo-imagem">
          <img src="imagens/sobrenos2.png" class="imagens" />
        </div>
      </div>

      <!-- Seção Contatos -->
      <div class="campo-contato" id="secao4">
        <h1 class="titulo tituloc">Contato</h1>
        <div class="menu-contato">
          <img src="imagens/contatos.png" alt="Ilustração de contato" class="imagens" />
          <form class="menu-cadastro">
            <div class="campo-cadastro">
              <h3 class="subtitulo">Deixe seus dados para te chamarmos</h3>
              <label for="nome" class="titulo-cadastro">Nome</label>
              <input type="text" id="nome" name="nome" class="texto-cadastro" required />

              <label for="email" class="titulo-cadastro">Email</label>
              <input type="email" id="email" name="email" class="texto-cadastro" required />

              <label for="telefone" class="titulo-cadastro">Telefone</label>
              <input type="tel" id="telefone" name="telefone" class="texto-cadastro" required />
            </div>

            <div class="campo-botao">
              <button type="submit" class="botao-enviar">Enviar</button>
            </div>
          </form>
        </div>
      </div>

    </main>
  </div>
  <div class="whatsapp-container">
    <a href="https://wa.me/551999999999?text=Olá%2C%20gostaria%20de%20mais%20informações"
      class="whatsapp-float" target="_blank" title="Fale conosco no WhatsApp">
      <span class="whatsapp-tooltip">Entre em contato com a gente</span>
      <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" />
    </a>
  </div>
  <!-- Rodapé -->
  <footer class="rodape">
    <p class="texto-rodape">
      © 2025 - Felipe, Enzo, Gustavo, Luiz, Murilo - PRIME SYSTEM
    </p>
  </footer>

  <!-- Script para esconder o cabeçalho ao rolar -->
  <script>
    const header = document.getElementById('cabecalho');

    window.addEventListener('scroll', () => {
      if (window.scrollY < 105) {
        header.classList.remove('oculto'); // mostra cabeçalho quando perto do topo (menos que 105px)
      } else {
        header.classList.add('oculto'); // esconde quando passar de 105px
      }
    });
  </script>
</body>

</html>