To set up project

1. vendor files: composer install
2. create local .env file: cp .env.example .env
3. generate unique key: php artisan key:generate
4. give db credentials in .env
5. run migrations: php artisan migrate
6. run the seeders: php artisan db:seed
7. install npm packages: npm install
8. run npm for dev: npm run watch

you can find login in UserSeeder.php 

