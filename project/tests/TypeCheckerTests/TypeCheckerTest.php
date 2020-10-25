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
        self::assertEquals($typeChecker->checkType($value), $typeIdent);
    }

    public function dataProvider()
    {
        return [
            'int 0' => [0, TypeChecker::TYPE_INT],
            'int 1' => [1, TypeChecker::TYPE_INT],
            'int 99999999999999999999' => [99999999999999999999,TypeChecker::TYPE_INT],
            'int -1' => [-1, TypeChecker::TYPE_INT],
            'int -999999999999999' => [-999999999999999, TypeChecker::TYPE_INT],
            'string 0' => ["0", TypeChecker::TYPE_INT],
            'string 1' => ["1", TypeChecker::TYPE_INT],
            'string 99999999999999999999' => ["99999999999999999999",TypeChecker::TYPE_INT],
            'string -1' => ["-1", TypeChecker::TYPE_INT],
            'string -999999999999999' => ["-999999999999999", TypeChecker::TYPE_INT],
        ];
    }
}
