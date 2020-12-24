## Install
```
clone git repository
```

Configuration file `.env`
make a .env file 
- copy .env.example .env

run composer install

database (database name according to what is at phpmyadmin) use xampp
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Generate key
- `php artisan key:generate`

Migrate database

- `php artisan migrate`

Install npm

- `npm install`


**Run application**
- xampp
- `npm run watch`
- `php artisan serve`
