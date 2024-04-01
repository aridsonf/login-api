# API - Login


A aplicação **Login** é uma API RESTful construída utilizando Laravel 11 e MySQL. O seu propósito é servir como um exemplo de aplicação Laravel que inclui testes de integração. Esta aplicação oferece funcionalidades para a criação de usuários e permite que os usuários façam login.
## Pré-requisitos ✅

- Composer
- Docker
- Docker Compose
- git

**Importante:** Laravel Sail utiliza a porta `3306` para o MySQL por padrão. Certifique-se de que esta porta esteja disponível 🚦 ou ajuste a configuração conforme necessário.
## Como Clonar o Projeto 📋

Para clonar o projeto, abra um terminal e execute o comando a seguir:
```bash
git clone https://github.com/aridsonf/login-api.git
```

Depois de clonar o repositório, navegue até o diretório do projeto:
```bash
cd login-api
```

## Configuração Inicial 🔧

Faça uma cópia do arquivo `.env.example` e renomeie-o para `.env` para configurar o ambiente:
```bash
cp .env.example .env
```

## Instalação e Configuração do Projeto usando Laravel Sail 🚀

Instale as dependências do projeto executando o comando de instalação:
```bash
composer install --ignore-platform-reqs
```

Inicie os contêineres Docker utilizando Laravel Sail:

```bash
./vendor/bin/sail up --build
```

Gere a chave da aplicação Laravel executando o seguinte comando:
```bash
./vendor/bin/sail artisan key:generate
```

Execute as migrações para criar as tabelas no banco de dados utilizando o seguinte comando:
```bash
./vendor/bin/sail artisan migrate
```

Se desejar, você pode popular o banco de dados com dados de exemplo executando as seeds utilizando o seguinte comando
```bash
./vendor/bin/sail artisan db:seed
```

## Como Rodar os Testes 🧪
Gere a chave da aplicação Laravel para o ambiente de teste executando o seguinte comando:
```bash
./vendor/bin/sail artisan key:generate --env=testing
```

Execute os testes de integração utilizando o seguinte comando:
```bash
./vendor/bin/sail artisan test 
```

## Gerando Documentação 📄
Para gerar a documentação, utilize o seguinte comando:
```bash
./vendor/bin/sail artisan l5-swagger:generate
```

## Acessando a Aplicação 🌐

A API estará acessível através do `http://localhost:80`. 

A documentação da API estará disponível em `http://localhost:80/api/documentation`.

## Desligando o Laravel Sail 🛑

Para desligar o Laravel Sail, execute o seguinte comando:
```bash
./vendor/bin/sail down
```

## Possíveis Erros e Soluções 🛠️

- **Erro**: Porta `3306` já está em uso 🚫.
    - **Solução**: Verifique se nenhum outro serviço está usando a porta `3306`. Se necessário, ajuste a porta no seu arquivo `.env` e `docker-compose.yml`.

- **Erro**: Permissões ao executar o Sail ⚠️.
    - **Solução**: Execute os comandos do Sail com `sudo` ou adicione seu usuário ao grupo Docker.

## Contribuindo 🤝

Estou ansioso para receber suas contribuições! Se você tiver ideias, sugestões ou encontrar problemas, não hesite em abrir uma issue ou enviar um pull request. Sua ajuda é muito bem-vinda!
