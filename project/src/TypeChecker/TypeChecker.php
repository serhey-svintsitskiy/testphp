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
        
        if ($this->isInt($value)) {
            return self::TYPE_INT;
        }
        
        if ($this->isFloat($value)) {
            return self::TYPE_STRING;
        }
        
        return self::TYPE_STRING;
    }

    private function isInt($value): bool
    {
        $intValue = (int)$value;

        return ($intValue && (string)$intValue === (string)$value) || $value === 0 || $value === '0';
    }

    private function isFloat($value): bool
    {
        $floatValue = (float)$value;

        return $value === '0' || ($floatValue && (string)$floatValue === (string)$value);
    }
}
