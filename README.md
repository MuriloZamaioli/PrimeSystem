# PrimeSystem

PrimeSystem é um sistema web para gestão de estoque, cadastro de clientes, fornecedores e produtos, desenvolvido em PHP e MySQL.

## Funcionalidades

- Cadastro de usuários com autenticação por senha e símbolo de segurança
- Recuperação de senha via símbolo escolhido
- Cadastro e gerenciamento de clientes, fornecedores e produtos
- Controle de vendas e estoque
- Interface moderna e responsiva

## Estrutura do Projeto

- `cadastrar.php` — Página de cadastro de novos usuários
- `entrar.php` — Página de login
- `esqueciSenha.php` — Recuperação de senha
- `redefineSenha.php` — Redefinição de senha
- `inicio.php` — Página inicial do sistema
- `conexao/` — Scripts PHP para conexão e operações no banco de dados
- `css/` — Arquivos de estilos CSS
- `imagens/` — Imagens utilizadas na interface
- `bd_primesystem.sql` — Script para criação do banco de dados

## Instalação

1. Clone o repositório ou copie os arquivos para seu servidor local (ex: XAMPP).
2. Importe o arquivo [`bd_primesystem.sql`](c:/xampp/htdocs/PrimeSystem/bd_primesystem.sql) no seu MySQL.
3. Configure o acesso ao banco em [`conexao/conexao.php`](c:/xampp/htdocs/PrimeSystem/conexao/conexao.php) se necessário.
4. Acesse as páginas pelo navegador (ex: `http://localhost/PrimeSystem/inicio.php`).

## Requisitos

- PHP >= 7.0
- MySQL/MariaDB
- Servidor web (Apache recomendado)

## Autores

- Felipe R
- Enzo
- Gustavo F
- Luiz
- Murilo

## Licença

Este projeto está sob licença MIT. Veja o arquivo [`LICENSE`](c:/xampp/htdocs/PrimeSystem/LICENSE) para mais informações.

