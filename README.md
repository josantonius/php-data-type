# PHP DataType library

[![Latest Stable Version](https://poser.pugx.org/josantonius/DataType/v/stable)](https://packagist.org/packages/josantonius/DataType)
[![License](https://poser.pugx.org/josantonius/DataType/license)](LICENSE)

**This library will no longer be supported. Alternatively, you can use the** [Validate](https://github.com/Josantonius/php-validate) **library.**

[Versión en español](README-ES.md)

PHP simple library for managing of data types.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [Sponsor](#Sponsor)
- [License](#license)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP DataType library**, simply:

    composer require Josantonius/DataType

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    composer require Josantonius/DataType --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone <https://github.com/Josantonius/PHP-DataType.git>

Or **install it manually**:

[Download DataType.php](https://raw.githubusercontent.com/Josantonius/PHP-DataType/master/src/DataType.php):

    wget https://raw.githubusercontent.com/Josantonius/PHP-DataType/master/src/DataType.php

## Available Methods

Available methods in this library:

### - Convert object to array

```php
DataType::objectToArray($object);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $object | Variable of the object. | object | Yes | |

**# Return** (array) → object converted to array

## Quick Start

To use this library with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\DataType\DataType;
```

Or If you installed it **manually**, use it:

```php
require_once __DIR__ . '/DataType.php';

use Josantonius\DataType\DataType;
```

## Usage

Example of use for this library:

```php
$object = new \stdClass();

$object->name  = 'Josantonius';
$object->email = 'info@josantonius.com';
$object->url   = 'https://github.com/josantonius/PHP-DataType';

echo '<pre>'; var_dump(DataType::objectToArray($object)); echo '</pre>';

/*
array(3) {
  ["name"]=>
  string(11) "Josantonius"
  ["email"]=>
  string(20) "info@josantonius.com"
  ["url"]=>
  string(36) "https://github.com/josantonius/PHP-DataType"
}
*/
```

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    git clone https://github.com/Josantonius/PHP-DataType.git
    
    cd PHP-DataType

    composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    composer phpmd

Run all previous tests:

    composer tests

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2016-2018, [Josantonius](https://github.com/josantonius#contact)
