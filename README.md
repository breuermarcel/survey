# Survey

## Installation

You can install the package via composer:

```bash
composer require breuermarcel/survey
```

## Usage

Require the package using composer.
```bash
composer require breuermarcel/survey
```

Or require package using git.
```bash
git clone git@github.com:breuermarcel/survey.git
````

Adjust composer.json and add package to psr-4.
```json
"Breuermarcel\\Survey\\": "packages/survey/src",
```

Register package in config/app.php.
```php
Breuermarcel\Survey\SurveyServiceProvider::class,
```

### Security

If you discover any security related issues, please email breuer.marcel@outlook.com instead of using the issue tracker.

## Credits

-   [Marcel Breuer](https://github.com/breuermarcel)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
