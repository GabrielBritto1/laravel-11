
# Setup Docker Laravel 11 com PHP 8.3
### Passo a passo
Clone Repositório
```sh
git clone -b laravel-11-with-php-8.3 https://github.com/especializati/setup-docker-laravel.git "app-laravel"
```
```sh
cd app-laravel
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Buildar os resources caso vá usar tailwind (Não é necessário caso use Bootstrap)
```sh
npm install
npm run build
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acesse o container app
```sh
docker-compose exec app bash
```

Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

OPCIONAL: Mude para usar o banco MySQL
```sh
DB_CONNECTION=mysql
DB_HOST="nome que está no docker-compose"
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME="usuario do docker-compose"
DB_PASSWORD="senha do docker-compose"
```

Rodar as migrations
```sh
php artisan migrate
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)

### (Dica extra)
## Caso queira colocar o Laravel 12 ao invés do 11 que está pré-instalado, substitue a seguinte linha no arquivo composer.json
```sh
"laravel/framework": "^12.0",
```
