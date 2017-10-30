# PHP DataType library

[![Latest Stable Version](https://poser.pugx.org/josantonius/DataType/v/stable)](https://packagist.org/packages/josantonius/DataType) [![Latest Unstable Version](https://poser.pugx.org/josantonius/DataType/v/unstable)](https://packagist.org/packages/josantonius/DataType) [![License](https://poser.pugx.org/josantonius/DataType/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/d215fe4b6f2040e492d9903294aff387)](https://www.codacy.com/app/Josantonius/PHP-DataType?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-DataType&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/DataType/downloads)](https://packagist.org/packages/josantonius/DataType) [![Travis](https://travis-ci.org/Josantonius/PHP-DataType.svg)](https://travis-ci.org/Josantonius/PHP-DataType) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-DataType/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-DataType)

[English version](README.md)

Biblioteca PHP para manejo de tipo de datos.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Tareas pendientes](#-tareas-pendientes)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación 

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP DataType library**, simplemente escribe:

    $ composer require Josantonius/DataType

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    $ composer require Josantonius/DataType --prefer-source

También puedes **clonar el repositorio** completo con Git:

  $ git clone https://github.com/Josantonius/PHP-DataType.git

O **instalarlo manualmente**:

[Descargar DataType.php](https://raw.githubusercontent.com/Josantonius/PHP-DataType/master/src/DataType.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-DataType/master/src/DataType.php

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### - Convertir objeto en array:

```php
DataType::objectToArray($object);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $object| Objeto. | object | Yes | |

**# Return** (array) → objeto convertido a array

## Cómo empezar

Para utilizar esta clase con **Composer**:

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

    $ git clone https://github.com/Josantonius/PHP-DataType.git
    
    $ cd PHP-DataType

    $ composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Ejecutar todas las pruebas anteriores:

    $ composer tests

## ☑ Tareas pendientes

- [x] Completar tests
- [x] Mejorar la documentación
- [ ] Agregar nuevos métodos

## Contribuir

1. Comprobar si hay incidencias abiertas o abrir una nueva para iniciar una discusión en torno a un fallo o función.
1. Bifurca la rama del repositorio en GitHub para iniciar la operación de ajuste.
1. Escribe una o más pruebas para la nueva característica o expón el error.
1. Haz cambios en el código para implementar la característica o reparar el fallo.
1. Envía pull request para fusionar los cambios y que sean publicados.

Esto está pensado para proyectos grandes y de larga duración.

## Repositorio

Los archivos de este repositorio se crearon y subieron automáticamente con [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

## Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

## Copyright

2016 - 2017 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).