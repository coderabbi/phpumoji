# phpumoji
PHPUnit Emoji Result Printer

[![StyleCI](https://styleci.io/repos/96408449/shield?branch=master)](https://styleci.io/repos/96408449)
[![Build Status](https://travis-ci.org/coderabbi/phpumoji.svg?branch=master)](https://travis-ci.org/coderabbi/phpumoji)
[![PDS Skeleton](https://img.shields.io/badge/pds-skeleton-blue.svg?style=flat-square)](https://github.com/php-pds/skeleton)

## Install

Via Composer

``` bash
$ composer require coderabbi/phpumoji --dev
```

## Usage

To enable PHPUnit emoji output, add the following two lines to the opening element of your `phpunit.xml`:

``` php
printerFile="vendor/coderabbi/phpumoji/src/EmojiPrinter.php"
printerClass="Coderabbi\Phpumoji\EmojiPrinter"
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email coderabbi@gmail.com instead of using the issue tracker.

## Credits

- [Yitzchok Willroth](https://github.com/coderabbi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
