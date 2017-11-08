<?php
/**
 * PHP simple library for managing of data types.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2017 (c) Josantonius - PHP-DataType
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-DataType
 * @since     1.1.3
 */
namespace Josantonius\DataType;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for DataType library.
 *
 * @since 1.1.3
 */
class DataTypeTest extends TestCase
{
    /**
     * Convert object to array.
     *
     * @since 1.1.3
     */
    public function testObjectToArray()
    {
        $object = new \stdClass();

        $object->name = 'Josantonius';
        $object->email = 'info@josantonius.com';
        $object->url = 'https://github.com/Josantonius/PHP-DataType';

        $this->assertInternalType(
            'array',
            DataType::objectToArray($object)
        );
    }
}
