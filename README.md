# PHP DataType library

[![Latest Stable Version](https://poser.pugx.org/josantonius/DataType/v/stable)](https://packagist.org/packages/josantonius/DataType) [![Latest Unstable Version](https://poser.pugx.org/josantonius/DataType/v/unstable)](https://packagist.org/packages/josantonius/DataType) [![License](https://poser.pugx.org/josantonius/DataType/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/d215fe4b6f2040e492d9903294aff387)](https://www.codacy.com/app/Josantonius/PHP-DataType?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-DataType&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/DataType/downloads)](https://packagist.org/packages/josantonius/DataType) [![Travis](https://travis-ci.org/Josantonius/PHP-DataType.svg)](https://travis-ci.org/Josantonius/PHP-DataType) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-DataType/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-DataType)

[Versión en español](README-ES.md)

PHP simple library for managing of data types.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

### Requirements

This library is supported by `PHP versions 5.6` or higher and is compatible with `HHVM versions 3.0` or higher.

### Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install `PHP DataType library`, simply:

    $ composer require Josantonius/DataType

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require Josantonius/DataType --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone https://github.com/Josantonius/PHP-DataType.git

Or **install it manually**:

[Download DataType.php](https://raw.githubusercontent.com/Josantonius/PHP-DataType/master/src/DataType.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-DataType/master/src/DataType.php

### Available Methods

Available methods in this library:

`Convert object to array:`

```php
DataType::objectToArray($object);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $object| Variable of the object. | object | Yes | |

**# Return** (array) → object converted to array

### Quick Start

To use this class with `Composer`:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\DataType\DataType;
```

Or If you installed it `manually`, use it:

```php
require_once __DIR__ . '/DataType.php';

use Josantonius\DataType\DataType;
```

### Usage

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

### Tests 

To run [tests](tests) you just need [Composer](http://getcomposer.org/download/) and to execute the following:

    $ git clone https://github.com/Josantonius/PHP-DataType.git
    
    $ cd PHP-DataType

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run all previous tests:

    $ composer tests

### ☑ TODO

- [x] Create tests
- [x] Improve documentation
- [ ] Add new methods

### Contribute

1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2016 - 2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).