## Run With Docker
- Run ``docker-compose up -d --build ``
- Run ``docker-compose exec app cp .env.example .env``
- Run ``docker-compose exec app composer install``
- Run ``docker-compose exec app php artisan key:generate``
- Run ``docker-compose exec app php artisan migrate:fresh --seed``

#### Open [http://127.0.0.1:8080](http://127.0.0.1:8080)
#### Phpmyadmin [http://127.0.0.1:8081](http://127.0.0.1:8081)

## Manual Install
- Run``composer install``
- Run ``cp .env.example .env``
- Then set environments in .env.
- Run ``php artisan key:generate``
- Run ``php artisan migrate:fresh --seed``
- Run ``php artisan serve``

## Try Endpoints Using Postman
- import [GSMPay.postman_collection.json](GSMPay.postman_collection.json) into postman.
- import [GSMPay.postman_collection.json](GSMPay.postman_collection.json) in root project into postman.
- Now then try endpoints :)
