<?php

declare(strict_types=1);

namespace Elavora\Api\DataTypes;

use Elavora\Api\Framework\Contracts\DescribesType;

final readonly class Json extends AbstractDataType implements DescribesType
{
    /**
     * Descreve o tipo para a documentacao publica (OPTIONS).
     *
     * @return array<string, mixed>
     */
    public static function documentedType(): array
    {
        return [
            'type' => 'string',
            'format' => 'json',
            'description' => 'Texto JSON valido (objeto, lista ou valor simples); nao pode ser vazio.',
            'example' => '{"name":"api"}',
        ];
    }

    /**
     * Verifica se o valor e uma string JSON valida.
     */
    public static function isValid(mixed $value): bool
    {
        if (!is_string($value) || trim($value) === '') {
            return false;
        }

        json_decode($value);

        return json_last_error() === JSON_ERROR_NONE;
    }
}
