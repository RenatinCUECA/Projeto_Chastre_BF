# Setup Projeto Buffet Infantil

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/RenatinCUECA/Projeto_Chastre_BF
```
```sh
cd Projeto_Chastre_BF
```

Crie o Arquivo .env
```sh
cp .env.example .env
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

Rode as migrations
```sh
php artisan migrate
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)
