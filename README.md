# token-generator
Package to generate cryptographically correct tokens in PHP.

# Usage
It is pretty simple to use this tiny library. The first thing to do is to include Composer autoloader.

```php
require_once __DIR__ . '/vendor/autoload.php';

use PiQo\Token;
```

Then the token is generated when the class is instanciated. The default length is 32 bytes, you can use the one you want by supply it to the constructor.

```php
$generated = new Token(64);
$token = $generated->getHex(); // Human readable
$token = $generated->getRaw(); // for the raw generated token
```
