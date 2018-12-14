

## Installation


1. `composer install`
2. Rename or copy `.env.example` file to `.env`
3. `php artisan key:generate`
4. Set your database credentials in your `.env` file
5. php artisan migrate:fresh
6.php artisan ravachuko:install
1. `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser
1. Visit `/admin` if you want to access the Voyager admin backend. Admin User/Password: `admin@admin.com/password`. Admin Web User/Password: `adminweb@adminweb.com/password`

## Windows Users - money_format() issue

The `money_format` function does not work in Windows. Take a look at [this thread](https://stackoverflow.com/questions/6369887/alternative-to-money-format-function-in-php-on-windows-platform/18990145). As an alternative, just use the `number_format` function instead.

1. In `app/helpers.php` replace `money_format` line with `return '$'.number_format($price / 100, 2);`
1. In `app/Product.php` replace `money_format` line with `return '$'.number_format($this->price / 100, 2);`
1. In `config/cart.php` set the `thousand_seperator` to an empty string or you might get a 'non well formed numeric value encountered' error. It conflicts with `number_format`.

## Starting from a particular point

If you would like to follow along from a particular point, follow these instructions. I'm going to be starting from my starting point in the first video of the series. You can choose any point by replacing the hash with [any particular commit](https://github.com/drehimself/laravel-ecommerce-example/commits/master).

1. Clone the repo and `cd` into it
1. `git checkout f4f651a8a35ebb2ff38ba15771fd65c93051f942`
1. Follow the rest of the steps above. Instead of `php artisan ecommerce:install`, migrate and seed the normal way with `php artisan migrate --seed`
"# Ravachuqo.ge" 
"# Ravachuqo.ge" 
"# Gifts" 
