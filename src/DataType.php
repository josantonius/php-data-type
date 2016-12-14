<?php 
/**
 * PHP simple library for managing of data types.
 * 
 * @category   JST
 * @package    DataType
 * @subpackage DataType
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2016 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.0.0
 * @link       https://github.com/Josantonius/PHP-DataType
 * @since      File available since 1.0.0 - Update: 2016-12-14
 */

namespace Josantonius\DataType;

use Josantonius\DataType\Exception\DataTypeException;

/**
 * Data type handler.
 *
 * @since 1.0.0
 */
class DataType { 

    /**
     * Convert object to array.
     * 
     * @param object $object → variable of the object
     *
     * @return array → object converted to array
     */
    public static function objectToArray($object) {

        if (!is_object($object) && !is_array($object)) {

            return $object;
        }

        return array_map('self::objectToArray', (array) $object);
    }
}
