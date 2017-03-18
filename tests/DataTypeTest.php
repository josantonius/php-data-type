<?php 
/**
 * PHP simple library for managing of data types.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2016
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-DataType
 * @since      1.0.0
 */

namespace Josantonius\DataType\Tests;

use Josantonius\DataType\DataType;

/**
 * Tests class for DataType library.
 *
 * @since 1.0.0
 */
class DataTypeTest { 

    /**
     * Convert object to array.
     *
     * @since 1.0.0
     */
    public static function testObjectToArray() {

        $object = self::testCreateObject();

        $array  = DataType::objectToArray($object);

        echo '<pre>'; var_dump($array); echo '</pre>';
    }

    /**
     * Create sample object.
     *
     * @since 1.0.0
     * 
     * @return object
     */
    public static function testCreateObject() {

        $object = new \stdClass();

        $object->name  = 'Josantonius';
        $object->email = 'info@josantonius.com';
        $object->url   = 'https://github.com/Josantonius/PHP-DataType';
        
        return $object;   
    }
}
