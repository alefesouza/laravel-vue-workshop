# Getting Started

O intuito dessa página é explicar algumas coisas que podem ser desconhecidas por algumas pessoas no workshop, e que elas irão precisar saber e fazer antes do início do workshop.

* [Laravel](#laravel)
* [Composer](#composer)
* [NPM](#npm)
* [Vue.js](#vuejs)
* [Iniciando o projeto](#getting-started)
* [Extras](#extras)

## <a name="laravel"></a> Laravel

O Laravel é atualmente um dos principais frameworks PHP, seguindo uma estrutura MVC que o torna muito fácil de se trabalhar, e um ORM incrível que facilita muito o trabalho com banco de dados, você pode saber mais sobre ele no [site oficial](https://laravel.com).

## <a name="composer"></a> Composer

O Composer é o gerenciador de pacotes mais famoso de projetos PHP, com ele você pode facilmente usar bibliotecas e frameworks desenvolvidos por outras pessoas nos seus projetos, utilizaremos ele para instalar as dependências do Laravel.

Você pode baixá-lo [clicando aqui](https://getcomposer.org/download).

## <a name="vuejs"></a> Vue.js

O Vue.js é atualmente um dos principais frameworks front-end, seguindo uma estrutura de componentes que torna muito fácil o desenvolvimento front-end, entre Angular, React e Vue.js, eu particularmente acho o último o mais simples e divertido de se trabalhar, e recomento tanto para projetos pequenos quanto para projetos grandes, ele também é o mais lembrado pela comunidade Laravel, sendo que ele até faz parte do template padrão do Laravel, você pode saber mais sobre ele no [site oficial](https://vuejs.org).

## <a name="npm"></a> NPM

O NPM é um gerenciador de pacotes padrão do Node.js, você utilizará ele para instalar as dependências do nosso front-end em Vue.js e também para "compilar o nosso front-end" utilizando o Node.js, dessa forma ele gerará um arquivo JavaScript normal capaz de ser executado no navegador com o máximo de otimização possível.

Ele é instalado junto com o Node.js, você pode baixá-lo facilmente instalando o Node.js [clicando aqui](https://nodejs.org), após a instalação, os comando "npm" e "node" estarão disponíveis.

## <a name="getting-started"></a> Iniciando o projeto

Nosso projeto utilizará as versões mais recentes do Laravel e Vue.js em 09/2018, mês do workshop, são elas o Laravel 5.7 e Vue.js 2.5.

Explicarei a seguir como iniciar um projeto em Laravel com Vue.js, recomendo fortemente que você já chegue no dia do workshop com o projeto iniciado, pois a instalação das dependências do projeto demora muito, qualquer dúvida ou problema fique a vontade para me contatar enviando um e-mail para [contact@alefesouza.com](mailto:contact@alefesouza.com).

Para iniciar, primeiro baixe o [Composer](https://getcomposer.org/download) e o [Node.js](https://nodejs.org), e então execute o seguinte comando em uma nova janela do Terminal ou CMD:

```
composer global require "laravel/installer"
```

Após a mensagem de sucesso, navegue até a pasta que você deseja iniciar o projeto e execute o seguinte comando caso você esteja executando o PHP 7.1+:

```
composer create-project --prefer-dist laravel/laravel laravel-vue-workshop
```

Ou esse caso esteja executando o PHP 5.6+:

```
composer create-project --prefer-dist laravel/laravel laravel-vue-workshop "5.4.*"
```

Isso criará os arquivos e estrutura de pastas básicas de um projeto Laravel e instalará as dependências do mesmo.

Após isso, entre na pasta do projeto criado utilizando o comando:

```
cd laravel-vue-workshop
```

E instale as dependências de front-end, como eu disse anteriormente, o Vue.js já faz parte do template padrão do Laravel, portanto você só precisa executar o comando:

```
npm install
```

Pronto, após a mensagem de sucesso você estará pronto para começar um projeto em Laravel com Vue.js.

No dia do workshop aprenderemos coisas super legais como o sistema de controllers, rotas, migrations, models, validations, authentication e um pouco do Blade template do Laravel, e também o sistema de componentes, rotas e bindings do Vue.js.

## <a name="extras"></a> Extras

Usaremos alguns outros programas para nos auxiliar no desenvolvimento, são eles:

[Postman](https://www.getpostman.com/) - Usaremos para verificar nossas chamadas HTTP com verbos além de GET de POST.

[SQLite Browser](https://sqlitebrowser.org/) - Usaremos para verificar os dados em nosso banco de dados SQLite.
