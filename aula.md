# Curso DIO

## Instalação:

https://laravel.com/docs/9.x/installation
composer create-project laravel/laravel example-app


## Banco de dados

arquivo .env, no caminho do banco tem que colocar o caminho completo, exemplo:
D:\dev-projects\Repositorios\Projeto-Laravel\banco\lavarel.sqlite3

## Rodar

php artisan serve

## Cache

Toda vez que alterar alguma coisa nas configurações 'config', tem que resetar o cache com:
php artisan config:clear

## Teoria

### Rotas

    URL, é o processo de mapear um endereço para outro endereço

### APIs

    Forma de integrar sistemas distintos, ou partes diferentes de um mesmo sistema

### Controlers

    Faz o controle a as validações dos dados

### Models

    Conexão com banco de dados

## Comandos

Criar Controller:
php artisan make:controller Usuario

Criar Model:
php artisan make:model Usuario