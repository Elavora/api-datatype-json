# Guia de uso

[README](../README.md) · Veja também: [Desenvolvimento e testes](DESENVOLVIMENTO.md) · [Automação do repositório](AUTOMACAO.md)

DataType JSON para aplicacoes Elavora API.

## Instalacao

```bash
composer require elavora/api-datatype-json
```

## Quando usar

- Validar e normalizar valores antes de chegar na regra de negocio.
- Evitar passar strings soltas entre services, DTOs e persistencia.
- Reutilizar a mesma validacao em controllers, comandos e testes.

## Exemplo rapido

```php
use Elavora\Api\DataTypes\Json;

$valor = new Json('{"status":"ok"}');
$normalizado = $valor->value();
```

## Principais pontos de entrada

- `Elavora\Api\DataTypes\Json`

## Dependencias de runtime

- `elavora/api-datatype-core` `^0.1`

## Validacao no projeto consumidor

Depois de instalar o pacote, rode os testes da aplicacao consumidora.

## Validacao do pacote

Como rodar os testes, o lint e o PHPStan, e como reproduzir o CI, esta em
[Desenvolvimento e testes](DESENVOLVIMENTO.md). Tudo roda em container, sem PHP instalado na maquina.

## Observacoes

- Mantenha regras de produto fora deste pacote.
- Prefira configurar extensoes no bootstrap da aplicacao.
- Instale apenas os modulos que a aplicacao realmente usa.
