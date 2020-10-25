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
        if (!is_numeric($value)) {
            return self::TYPE_STRING;
        }

        if (is_int($value)) {
            return self::TYPE_INT;
        }
        if (is_float($value)) {
            return self::TYPE_FLOAT;
        }
        
        if (is_string($value)) {
            if ((string)(int)$value === $value) {
                return self::TYPE_INT;
            }
            
            if ((string)(float)$value === $value) {
                return self::TYPE_FLOAT;
            }
        }

        
        return self::TYPE_STRING;
    }
}
