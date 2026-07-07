<?php

declare(strict_types=1);

namespace Elavora\Api\DataTypes\Json\Tests;

use Elavora\Api\DataTypes\Json;
use PHPUnit\Framework\TestCase;

final class JsonTest extends TestCase
{
    public function testValidatesJson(): void
    {
        self::assertTrue(Json::isValid('{"name":"api"}'));
        self::assertFalse(Json::isValid('{invalid'));
    }
}
