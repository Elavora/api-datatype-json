# Guia de uso

`Json` aceita strings nao vazias que o decodificador JSON do PHP reconhece como validas.

```php
use Elavora\Api\DataTypes\Json;

$json = Json::from('{"status":"ok"}');

echo $json->value(); // {"status":"ok"}
```

Objetos, arrays e valores escalares JSON validos sao aceitos. O pacote preserva a string recebida e nao aplica formatacao, canonicalizacao ou validacao de esquema.

Para verificar uma entrada sem criar uma instancia:

```php
if (Json::isValid($entrada)) {
    $json = Json::from($entrada);
}
```

## Validacao do pacote

Execute os comandos a partir da raiz do clone:

```bash
docker run --rm -v "${PWD}:/workspace" -w /workspace composer:2 composer update --no-interaction --no-progress --prefer-dist
docker run --rm -v "${PWD}:/workspace" -w /workspace composer:2 composer check
```
