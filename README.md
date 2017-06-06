 # Stripe PHP Example customized from [Stripe PHP](https://github.com/stripe/stripe-php)

## Getting Started

Sign up for a Stripe account at https://stripe.com to get the keys.

Simple usage looks like:

Check that you have next entry in `composer.json` file.

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