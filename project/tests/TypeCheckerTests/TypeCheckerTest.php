<?php

namespace TypeCheckerTests;

use TypeChecker\TypeChecker;
use PHPUnit\Framework\TestCase;

class TypeCheckerTest extends TestCase
{

    /**
     * @dataProvider dataProvider
     */
    public function testCheckType($value, string $typeIdent)
    {
        $typeChecker = new TypeChecker();
        self::assertEquals($typeIdent, $typeChecker->checkType($value));
    }

    public function dataProvider()
    {
        return [
            'string 42' => ["42", TypeChecker::TYPE_INT],
            'int 1337' => [1337, TypeChecker::TYPE_INT],
            'int 0x539' => [0x539, TypeChecker::TYPE_INT],
            'int 02471' => [02471, TypeChecker::TYPE_INT],
            'int 0b10100111001' => [0b10100111001, TypeChecker::TYPE_INT],
            'int 1337e0' => [1337e0, TypeChecker::TYPE_INT],
            'string 0x539' => ["0x539", TypeChecker::TYPE_STRING],
            'string 02471' => ["02471", TypeChecker::TYPE_INT],
            'string 1337e0' => ["1337e0", TypeChecker::TYPE_STRING],
            'string not numeric' => ["not numeric", TypeChecker::TYPE_STRING],
            'float 9.1' => [9.1, TypeChecker::TYPE_FLOAT],
            'array' => [[], TypeChecker::TYPE_STRING],
            'null' => [null, TypeChecker::TYPE_STRING],
            'int 0' => [0, TypeChecker::TYPE_INT],
            'int 1' => [1, TypeChecker::TYPE_INT],
            'int -1' => [-1, TypeChecker::TYPE_INT],
            'int -999999999999999' => [-999999999999999, TypeChecker::TYPE_INT],
            'string 0' => ["0", TypeChecker::TYPE_INT],
            'string 1' => ["1", TypeChecker::TYPE_INT],
            'string -1' => ["-1", TypeChecker::TYPE_INT],
            'string -999999999999999' => ["-999999999999999", TypeChecker::TYPE_INT],
            'int 99999999999999999999' => [99999999999999999999, TypeChecker::TYPE_STRING],
            'string 99999999999999999999' => ["99999999999999999999", TypeChecker::TYPE_STRING],
        ];
    }
}
