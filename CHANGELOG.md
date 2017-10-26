# CHANGELOG

## 1.1.4 - 2017-10-27

* Implemented `PSR-4 autoloader standard` from all library files.

* Implemented `PSR-2 coding standard` from all library PHP files.

* Implemented `PHPCS` to ensure that PHP code complies with `PSR2` code standards.

* Implemented `Codacy` to automates code reviews and monitors code quality over time.

* Implemented `Codecov` to coverage reports.

* Added `DataType/phpcs.ruleset.xml` file.

* Deleted `DataType/src/bootstrap.php` file.

* Deleted `DataType/tests/bootstrap.php` file.

* Deleted `DataType/vendor` folder.

* Changed `Josantonius\DataType\Test\DataTypeTest` class to  `Josantonius\DataType\DataTypeTest` class.

## 1.1.3 - 2017-09-12

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with Travis CI to implement continuous integration.
 
* Added `DataType/src/bootstrap.php` file

* Added `DataType/tests/bootstrap.php` file.

* Added `DataType/phpunit.xml.dist` file.
* Added `DataType/_config.yml` file.
* Added `DataType/.travis.yml` file.

* Deleted `Josantonius\DataType\Tests\DataTypeTest` class.
* Deleted `Josantonius\DataType\Tests\DataTypeTest::testObjectToArray()` method.
* Deleted `Josantonius\DataType\Tests\DataTypeTest::testCreateObject()` method.

* Added `Josantonius\DataType\Test\DataTypeTest` class.
* Added `Josantonius\DataType\Test\DataTypeTest::testObjectToArray()` method.

## 1.1.2 - 2017-07-16

* Deleted `Josantonius\DataType\Exception\DataTypeException` class.
* Deleted `Josantonius\DataType\Exception\Exceptions` abstract class.
* Deleted `Josantonius\DataType\Exception\DataTypeException->__construct()` method.

## 1.1.1 - 2017-03-18

* Some files were excluded from download and comments and readme files were updated.

## 1.1.0 - 2017-01-30

* Compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-30

* Compatible only with PHP 7.0 or higher. In the next versions, the library will be modified to make it compatible with PHP 5.6 or higher.

## 1.0.0 - 2016-12-14

* Added `Josantonius\DataType\DataType` class.
* Added `Josantonius\DataType\DataType::objectToArray()` method.

## 1.0.0 - 2016-12-14

* Added `Josantonius\DataType\Exception\DataTypeException` class.
* Added `Josantonius\DataType\Exception\Exceptions` abstract class.
* Added `Josantonius\DataType\Exception\DataTypeException->__construct()` method.

## 1.0.0 - 2016-12-14

* Added `Josantonius\DataType\Tests\DataTypeTest` class.
* Added `Josantonius\DataType\Tests\DataTypeTest::testObjectToArray()` method.
* Added `Josantonius\DataType\Tests\DataTypeTest::testCreateObject()` method.
