<?php
/**
 * PHP simple library for managing of data types.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2018 (c) Josantonius - PHP-DataType
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-DataType
 * @since     1.1.3
 */
namespace Josantonius\DataType;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for DataType library.
 */
final class DataTypeTest extends TestCase
{
    /**
     * DataType instance.
     *
     * @since 1.1.5
     *
     * @var object
     */
    protected $DataType;

    /**
     * Set up.
     *
     * @since 1.1.5
     */
    public function setUp()
    {
        parent::setUp();

        $this->DataType = new DataType;
    }

    /**
     * Check if it is an instance of DataType.
     *
     * @since 1.1.5
     */
    public function testIsInstanceOfDataType()
    {
        $this->assertInstanceOf('Josantonius\DataType\DataType', $this->DataType);
    }

    /**
     * Convert object to array.
     */
    public function testObjectToArray()
    {
        $datatype = $this->DataType;

        $object = new \stdClass();

        $object->name = 'Josantonius';
        $object->email = 'info@josantonius.com';
        $object->url = 'https://github.com/Josantonius/PHP-DataType';

        $this->assertInternalType(
            'array',
            $datatype::objectToArray($object)
        );
    }
}
