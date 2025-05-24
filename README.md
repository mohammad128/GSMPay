## Run With Docker
###### Run commands step by step

```bash 
docker-compose up -d --build 
```
```bash 
docker-compose exec app cp .env.example .env
```
```bash 
docker-compose exec app composer install
```
```bash 
docker-compose exec app php artisan key:generate
```
```bash 
docker-compose exec app php artisan migrate:fresh --seed
```
#### Open [http://127.0.0.1:8080](http://127.0.0.1:8080)
#### Phpmyadmin [http://127.0.0.1:8081](http://127.0.0.1:8081) (user: gsmpay, pass: gsmpay)
___
## Manual Install
```bash 
composer install
```
```bash 
cp .env.example .env
```
###### Then set environments in .env.
```bash 
php artisan key:generate
```
```bash 
php artisan migrate:fresh --seed
```
```bash 
php artisan serve
```

___
## Run Tests

### Using Docker
```bash
docker-compose exec app php artisan test
```
### Or Manual
```bash
php artisan test
```

___
## Try Endpoints Using Postman
- import [GSMPay.postman_collection.json](GSMPay.postman_collection.json) into postman.
- import [GSMPay.postman_collection.json](GSMPay.postman_collection.json) in root project into postman.
- Now then try endpoints :)
## Or Using [Swagger](http://127.0.0.1:8080/docs) UI
- Open [http://127.0.0.1:8080/docs](http://127.0.0.1:8080/docs).


