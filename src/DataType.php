<?php
/**
 * PHP simple library for managing of data types.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2017 (c) Josantonius - PHP-DataType
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-DataType
 * @since     1.0.0
 */

namespace Josantonius\DataType;

/**
 * Data type handler.
 *
 * @since 1.0.0
 */
class DataType
{
    /**
     * Convert object to array.
     *
     * @since 1.0.0
     *
     * @param object $object → variable of the object
     *
     * @return array → object converted to array
     */
    public static function objectToArray($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        return array_map('self::objectToArray', (array) $object);
    }
}
