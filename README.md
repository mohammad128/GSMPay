## Run With Docker
- ``docker-compose up -d --build ``
- ``docker-compose exec app cp .env.example .env``
- ``docker-compose exec app composer install``
- ``docker-compose exec app php artisan key:generate``
- ``docker-compose exec app php artisan migrate:fresh --seed``

#### Open [http://127.0.0.1:8080](http://127.0.0.1:8080)
#### Phpmyadmin [http://127.0.0.1:8081](http://127.0.0.1:8081) (user: gsmpay, pass: gsmpay)

## Manual Install
- ``composer install``
-  ``cp .env.example .env``
- Then set environments in .env.
-  ``php artisan key:generate``
-  ``php artisan migrate:fresh --seed``
-  ``php artisan serve``

## Try Endpoints Using Postman
- import [GSMPay.postman_collection.json](GSMPay.postman_collection.json) into postman.
- import [GSMPay.postman_collection.json](GSMPay.postman_collection.json) in root project into postman.
- Now then try endpoints :)
## Or Using [Swagger](http://127.0.0.1:8080/docs) UI
- Open [http://127.0.0.1:8080/docs](http://127.0.0.1:8080/docs).
