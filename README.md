# laravel-monopond-fax
Laravel package for monopond fax api client.

This package contains a sub module from [Monopond's Fax API Client](https://github.com/Monopond/fax-api-client-php)

#Installation

After updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
'Balgf\LaravelMonopondFax\ServiceProvider',
```

You can use the facade for shorter code. Add this to your aliases:

```php
'LaravelMonopondFax' => 'Balgf\LaravelMonopondFax\Facades\LaravelMonopondFax',
```

To publish the config settings in Laravel 5 use:

```php
php artisan vendor:publish --provider="Balgf\LaravelMonopondFax\ServiceProvider"
```

This will add an `monopond.php` config file to your config folder.