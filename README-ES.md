# PHP DataType library

[![Latest Stable Version](https://poser.pugx.org/josantonius/DataType/v/stable)](https://packagist.org/packages/josantonius/DataType)
[![License](https://poser.pugx.org/josantonius/DataType/license)](LICENSE)

**No se seguirá dando soporte a esta biblioteca. Como alternativa puedes utilizar la biblioteca** [Validate](https://github.com/Josantonius/php-validate)**.**

[English version](README.md)

Biblioteca PHP para manejo de tipo de datos.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Patrocinar](#patrocinar)
- [Licencia](#licencia)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP DataType library**, simplemente escribe:

    composer require Josantonius/DataType

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    composer require Josantonius/DataType --prefer-source

También puedes **clonar el repositorio** completo con Git:

  $ git clone <https://github.com/Josantonius/PHP-DataType.git>

O **instalarlo manualmente**:

[Descargar DataType.php](https://raw.githubusercontent.com/Josantonius/PHP-DataType/master/src/DataType.php):

    wget https://raw.githubusercontent.com/Josantonius/PHP-DataType/master/src/DataType.php

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### - Convertir objeto en array

```php
DataType::objectToArray($object);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $object| Objeto. | object | Yes | |

**# Return** (array) → objeto convertido a array

## Cómo empezar

Para utilizar esta biblioteca con **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\DataType\DataType;
```

Si la instalaste **manualmente**, utiliza:

```php
require_once __DIR__ . '/DataType.php';

use Josantonius\DataType\DataType;
```

## Uso

Ejemplo de uso para esta biblioteca:

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

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    git clone https://github.com/Josantonius/PHP-DataType.git
    
    cd PHP-DataType

    composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    composer phpunit

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    composer phpmd

Ejecutar todas las pruebas anteriores:

    composer tests

## Patrocinar

Si este proyecto te ayuda a reducir el tiempo de desarrollo,
[puedes patrocinarme](https://github.com/josantonius/lang/es-ES/README.md#patrocinar)
para apoyar mi trabajo :blush:

## Licencia

Este repositorio tiene una licencia [MIT License](LICENSE).

Copyright © 2016-2018, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
