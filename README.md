# api-datatype-json

[![Packagist Version](https://img.shields.io/packagist/v/elavora/api-datatype-json.svg?style=flat-square)](https://packagist.org/packages/elavora/api-datatype-json)
[![PHP Version](https://img.shields.io/packagist/php-v/elavora/api-datatype-json.svg?style=flat-square)](https://packagist.org/packages/elavora/api-datatype-json)
[![Composer Quality](https://github.com/Elavora/api-datatype-json/actions/workflows/quality.yml/badge.svg?branch=main)](https://github.com/Elavora/api-datatype-json/actions/workflows/quality.yml)
[![CodeQL](https://github.com/Elavora/api-datatype-json/actions/workflows/codeql.yml/badge.svg?branch=main)](https://github.com/Elavora/api-datatype-json/actions/workflows/codeql.yml)
[![License](https://img.shields.io/packagist/l/elavora/api-datatype-json.svg?style=flat-square)](https://packagist.org/packages/elavora/api-datatype-json)

DataType imutavel para validar strings JSON.

## Requisitos

- PHP 8.3 ou superior.
- Demais requisitos declarados em [`composer.json`](composer.json).

## Instalacao

```bash
composer require elavora/api-datatype-json
```

## Inicio rapido

```php
use Elavora\Api\DataTypes\Json;

$valor = Json::from('{"name":"api"}');
$normalizado = $valor->value();
```

`$normalizado` contem a string JSON original. O pacote valida a sintaxe, mas nao reformata nem valida um esquema.

## Documentacao

Consulte o [guia de uso](docs/USO.md) para detalhes e validacao local.
