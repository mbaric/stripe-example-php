 # Stripe PHP Example customized from [Stripe PHP](https://github.com/stripe/stripe-php)

Sign up for a Stripe account at https://stripe.com to get the keys.

## Requirements

PHP 5.3.3 and later.

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require stripe/stripe-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Manual Installation

If you do not wish to use Composer, you can download the [latest release](https://github.com/stripe/stripe-php/releases). Then, to use the bindings, include the `init.php` file.

```php
require_once('/path/to/stripe-php/init.php');
```

If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make sure that these extensions are available.

## Dependencies

The bindings require the following extension in order to work properly:

- [`curl`](https://secure.php.net/manual/en/book.curl.php), although you can use your own non-cURL client if you prefer
- [`json`](https://secure.php.net/manual/en/book.json.php)
- [`mbstring`](https://secure.php.net/manual/en/book.mbstring.php) (Multibyte String)

## Getting Started

Simple usage looks like:

Check that you have composer.json file.

```php
{
    "require": {
        "stripe/stripe-php": "4.12.0"
    }
}
```


```bash
composer install
```

Login to your Stripe account and get the private and public keys.

Modify the keys in stripe_config.php and set $testmode "on" or "off"



Run it in your browser: http://localhost/stripe