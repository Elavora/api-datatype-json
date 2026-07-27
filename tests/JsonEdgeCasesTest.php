<?php

declare(strict_types=1);

namespace Elavora\Api\DataTypes\Json\Tests;

use Elavora\Api\DataTypes\Json;
use PHPUnit\Framework\TestCase;

final class JsonEdgeCasesTest extends TestCase
{
    public function testRejectsValuesThatAreNotStrings(): void
    {
        self::assertFalse(Json::isValid(null));
        self::assertFalse(Json::isValid(123));
        self::assertFalse(Json::isValid([]));
    }

    public function testRejectsEmptyOrWhitespaceStrings(): void
    {
        self::assertFalse(Json::isValid(''));
        self::assertFalse(Json::isValid(" \t\n"));
    }
}
