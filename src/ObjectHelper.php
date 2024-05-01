<?php
/**
 * Reagordi Component
 *
 * @link https://reagordi.com/
 * @copyright Copyright (c) 2023 Sergej Rufov
 * @license https://dev.reagordi.com/license
 */

declare(strict_types=1);

namespace Reagordi\Support\Objects;

/**
 * Base class of useful static methods
 *
 * @author Sergej Rufov <support@reagordi.com>
 * @since 1.0
 */
class ObjectHelper
{
    /**
     * Configures an object with the initial property values.
     *
     * @param object $object the object to be configured
     * @param array $properties the property initial values given in terms of name-value pairs.
     * @return object the object itself
     */
    public static function configure(object $object, array $properties): object
    {
        foreach ($properties as $name => $value) {
            $object->$name = $value;
        }

        return $object;
    }
}
