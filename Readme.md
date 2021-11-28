# QuickDeal

An Ecommerce Shop.

## Development

### Requirements

- php v7.3
- php extension **mcrypt**
- Mysql

And make sure `php` is available in your system **PATH**.

### Installation

First you need to clone `.env` file in the root directory like: 
```
cp .env.example .env
```

and then configure database connection in `.env`.
```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<created database-name here>
DB_USERNAME=<your username here>
DB_PASSWORD=<your password here>
```

You need to install project dependencies:
```bash
php ./composer.phar install
```

And populate database with default values:
```bash
php artisan migrate --seed
``` 

Now, you can run the application by:
```bash
php artisan serve
```
This will start local server on `localhost:8000`
