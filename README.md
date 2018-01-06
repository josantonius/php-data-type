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

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP DataType library**, simply:

    $ composer require Josantonius/DataType

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require Josantonius/DataType --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone https://github.com/Josantonius/PHP-DataType.git

Or **install it manually**:

[Download DataType.php](https://raw.githubusercontent.com/Josantonius/PHP-DataType/master/src/DataType.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-DataType/master/src/DataType.php

## Available Methods

Available methods in this library:

### - Convert object to array:

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

    $ git clone https://github.com/Josantonius/PHP-DataType.git
    
    $ cd PHP-DataType

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    $ composer phpmd

Run all previous tests:

    $ composer tests

## ☑ TODO

- [ ] Add new feature.
- [ ] Improve tests.
- [ ] Improve documentation.
- [ ] Refactor code for disabled code style rules. See [phpmd.xml](phpmd.xml) and [.php_cs.dist](.php_cs.dist).

## Contribute

If you would like to help, please take a look at the list of
[issues](https://github.com/Josantonius/PHP-DataType/issues) or the [To Do](#-todo) checklist.

**Pull requests**

* [Fork and clone](https://help.github.com/articles/fork-a-repo).
* Run the command `composer install` to install the dependencies.
  This will also install the [dev dependencies](https://getcomposer.org/doc/03-cli.md#install).
* Run the command `composer fix` to excute code standard fixers.
* Run the [tests](#tests).
* Create a **branch**, **commit**, **push** and send me a
  [pull request](https://help.github.com/articles/using-pull-requests).

## Repository

The file structure from this repository was created with [PHP-Skeleton](https://github.com/Josantonius/PHP-Skeleton).

## License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

## Copyright

2016 - 2018 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).