#**eKutivaSolutions**
###Laravel-SymLinker

This simple package provides the capacity of creating a symbolic link of the 'storage/app/public' folder inside the public folder using an artisan command.
Note that this functionality is already present in the Laravel Framework v 5.3 so this is just for the versions 5.2 and under.

## Installation

You can install this package via composer using this command:

```bash
composer require ekutivasolutions/laravel-symlinker
```

Next, you must install the service provider:

```php
// config/app.php
'providers' => [
    ...
    eKutivaSolutions\SymLinker\Providers\SymLinkServiceProvider::class,
];
```

## Usage
```bash
php artisan storage:symlink
```

## Security

If you discover any security related issues, please email [info@ekutivasolutions.com](mailto:info@sekutivasolutions.com) instead of using the issue tracker.

## Credits

- [Maizer Gomes](https://github.com/MaizerGomes)

## About eKutivaSolutions
eKutivaSolutions is a Mozambican agency that develops web applications. [Find more info on our website](https://ekutivasolutions.com).

## License

The MIT License (MIT).
