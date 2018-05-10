# phpColors

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/3a77e6f0248e41fda03fe6e68dcb7e86)](https://www.codacy.com/app/klevze/phpColors?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=klevze/phpColors&amp;utm_campaign=Badge_Grade)

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
