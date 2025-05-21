## Run With Docker
- Run ``docker-compose up -d --build ``
- Run ``docker-compose exec app co .env.example .env``
- Run ``docker-compose exec app composer install``
- Run ``docker-compose exec app php artisan key:generate``
- Run ``docker-compose exec app php migrate:fresh --seed``

#### Open [http://127.0.0.1:8080](http://127.0.0.1:8080)
#### Phpmyadmin [http://127.0.0.1:8081](http://127.0.0.1:8081)

## Manual Install
- Run``composer install``
- Run ``cp .env.example .env``
- Then set environments in .env.
- Run ``php artisan key:generate``
- Run ``php migrate:fresh --seed``

## Postman
- import ``GSMPay.postman_collection.json`` in the root project
- then try endpoints :)
