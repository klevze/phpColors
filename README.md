# phpColors

Adds colors to your console applications

[View on Packagist](https://packagist.org/packages/klevze/phpcolors)



## Installation

`composer require klevze/phpcolors`

or update your `composer.json`

```
    ...
    "require": {
        "klevze/phpcolors": "^0.1.0"
    },
    ... 
```


## How to use

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use \klevze\phpColors\Colors;

$c = new Colors();

echo $c->bgRed() . "TEST TEXT " . $c->reset() . PHP_EOL;

```

See `example.php` for more details
