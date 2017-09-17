# PHP DataType library

[![Latest Stable Version](https://poser.pugx.org/josantonius/datatype/v/stable)](https://packagist.org/packages/josantonius/datatype) [![Total Downloads](https://poser.pugx.org/josantonius/datatype/downloads)](https://packagist.org/packages/josantonius/datatype) [![Latest Unstable Version](https://poser.pugx.org/josantonius/datatype/v/unstable)](https://packagist.org/packages/josantonius/datatype) [![License](https://poser.pugx.org/josantonius/datatype/license)](https://packagist.org/packages/josantonius/datatype) [![Travis](https://travis-ci.org/Josantonius/PHP-DataType.svg)](https://travis-ci.org/Josantonius/PHP-DataType)

[Versión en español](README-ES.md)

PHP simple library for managing of data types.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP DataType library, simply:

    $ composer require Josantonius/DataType

The previous command will only install the necessary files, if you prefer to download the entire source code (including tests, vendor folder, exceptions not used, docs...) you can use:

    $ composer require Josantonius/DataType --prefer-source

Or you can also clone the complete repository with Git:

	$ git clone https://github.com/Josantonius/PHP-DataType.git

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\DataType\DataType;
```
### Available Methods

Available methods in this library:

```php
DataType::objectToArray();
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\DataType\DataType;

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

To run [tests](tests/DataType/Test) simply:

    $ git clone https://github.com/Josantonius/PHP-DataType.git
    
    $ cd PHP-DataType

    $ phpunit

### ☑ TODO

- [x] Create tests
- [ ] Improve documentation

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