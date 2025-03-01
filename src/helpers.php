<?php

use Antoksa\CallableThatProxy\That;

if (! function_exists('that')) {
    /**
     * @template T of object
     *
     * @param T|class-string<T> $class Type (must be classed string; object declaration is for IDE autocomplete)
     * @return That|T|That<T>
     */
    function that(string $class = '', array $args = [], string $method = '', string $property = ''): That {
        return That::make(compact('class', 'method', 'args', 'property'));
    }
}
