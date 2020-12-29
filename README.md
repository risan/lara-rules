# Lara Rules

Laravel custom validation rules.

[![Latest Stable Version](https://poser.pugx.org/risan/lara-rules/v)](https://packagist.org/packages/risan/lara-rules) 
[![License](https://poser.pugx.org/risan/lara-rules/license)](https://packagist.org/packages/risan/lara-rules)

## Installation

This package requires you to use Laravel version 8. Install this package through Composer.

```bash
$ composer require risan/lara-rules
```

## Usage

```php
use Risan\LaraRules\USPhoneWithDash;

$request->validate([
    'phone' => ['required', 'string', new USPhoneWithDash], // Valid: 123-456-7890
    'state' => ['required', 'string', new USStateCode], // Valid: CA, TX
    'zip_code' => ['required', 'string', new USZipCode], // Valid: 90120 or 20521-9000
]);
```

- `USPhoneWithDash`: 10 digits of US phone number with dash.
- `USStateCode`: 2 characters of US state code.
- `USZipCode`: 5 or 9 digits of US zip code.

## License

[MIT](https://github.com/risan/helpers/blob/master/LICENSE) © [Risan Bagja Pradana](https://risanb.com)