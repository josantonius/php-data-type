<?php 
/**
 * PHP simple library for managing of data types.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2016
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-DataType
 * @since      1.1.3
 */

namespace Josantonius\DataType\Test;

use Josantonius\DataType\DataType,
    PHPUnit\Framework\TestCase;

/**
 * Tests class for DataType library.
 *
 * @since 1.1.3
 */
class DataTypeTest extends TestCase { 

    /**
     * Convert object to array.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testObjectToArray() {

        $object = new \stdClass();

        $object->name  = 'Josantonius';
        $object->email = 'info@josantonius.com';
        $object->url   = 'https://github.com/Josantonius/PHP-DataType';

        $this->assertInternalType('array',
        
            DataType::objectToArray($object)
        );
    }
}
