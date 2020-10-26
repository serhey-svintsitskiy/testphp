<?php

declare(strict_types=1);

namespace TypeChecker;

class TypeChecker
{
    public const TYPE_INT = 'int';
    public const TYPE_FLOAT = 'float';
    public const TYPE_STRING = 'string';
    
    public function checkType($value): string
    {

        if (is_int($value) || (string)(int)$value === $value) {
            return self::TYPE_INT;
        }
        if (is_float($value) || (string)(float)$value === $value) {
            return self::TYPE_FLOAT;
        }

        return self::TYPE_STRING;
    }
}
