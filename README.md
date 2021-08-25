# CRUD - Symfony, Bootstrap e phpMyAdmin

## Instruções

``` bash
# Instalar as dependẽncias
composer install

# configure as informações da conexão do banco de dados no arquivo .env

# para usar o mysql
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"

# para usar mariadb:
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.5.8"

# para usar sqlite:
DATABASE_URL="sqlite:///%kernel.project_dir%/var/app.db"

# para usar postgresql:
DATABASE_URL="postgresql://db_user:db_password@127.0.0.1:5432/db_name?serverVersion=11&charset=utf8"

# para rodar o servidor local
symfony server:start
```
## Banco de Dados

Importe o arquivo cliente.sql no phpMyAdmin para criar a tabela.
