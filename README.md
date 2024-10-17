# Simple Print Page

[![Latest Version on Packagist](https://img.shields.io/packagist/v/print/print.svg?style=flat-square)](https://packagist.org/packages/print/print)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/print/print/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/print/print/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/print/print/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/print/print/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/print/print.svg?style=flat-square)](https://packagist.org/packages/print/print)



The print package is a simple and efficient tool that allows users to quickly print the current webpage directly from their browser. This plugin enhances the convenience of printing online content by providing a one-click solution for generating printer-friendly versions of the pages you're viewing.

## Installation

You can install the package via composer:

```bash
composer require print/print
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="print-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="print-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="print-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$print = new Print\Print();
echo $print->echoPhrase('Hello, Print!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ahmed Hassan](https://github.com/AHMEDHASSAN202)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
