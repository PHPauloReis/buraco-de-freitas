## O que é Buraco de Freitas?

De uma forma lúdica e bem humorada, a aplicação Buraco de Freitas foi criada para apresentar aos alunos do curso de Sistemas de Informação da Faculdade UNIME de Lauro de Freitas, conceitos importantes sobre Gerenciamento e Qualidade de Softwares. Por meio dessa aplicação os alunos poderão realizar Escrita de User Story, Cenários de Testes e Códigos para automação de testes com PHPUnit e Cypress.

<p align="center"><img src="https://github.com/PHPauloReis/buraco-de-freitas/blob/master/public/assets/images/screenshot/screenshot.png" width="600"></p>

**Importante:** Por se tratar de uma aplicação para a disciplina de Gerenciamento e Qualidade de Softwares, alguns "BUGs" foram propositalmente deixados na aplicação para que os alunos possam investigar e reportar.

## Contribuindo com o projeto

Caso queira contribuir com o projeto, crie um Pull Request ;)

## Como instalar?

- Clone esse repositório público para a sua máquina
- Realize a instalação das dependências com o comando `composer install`
- Crie um arquivo `.env` a partir do arquivo `.env.example`
- Crie uma chave de segurança para a sua aplicação usando o comando `php artisan key:generate`
- Execute o comando de migração e população do banco de dados `php artisan migrate --seed`
- Execute a aplicação `php artisan serve`

## Requisitos de Sistema

 - Interpretador PHP 8.1 ou superior
 - Composer 2.0 ou superior
 - MySQL ou MariaDB server

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
