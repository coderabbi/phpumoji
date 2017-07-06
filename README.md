# phpumoji
PHPUnit Emoji Result Printer

[![Build Status](https://travis-ci.org/coderabbi/phpumoji.svg?branch=master)](https://travis-ci.org/coderabbi/phpumoji)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/coderabbi/phpumoji/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/coderabbi/phpumoji/?branch=master)
[![StyleCI](https://styleci.io/repos/96408449/shield?branch=master)](https://styleci.io/repos/96408449)
[![PDS Skeleton](https://img.shields.io/badge/pds-skeleton-blue.svg?style=flat-square)](https://github.com/php-pds/skeleton)

## Install

Via Composer

``` bash
$ composer require coderabbi/phpumoji --dev
```

To enable PHPUnit emoji output, add the following two lines to the opening element of your `phpunit.xml`:

``` php
printerFile="vendor/coderabbi/phpumoji/src/EmojiPrinter.php"
printerClass="Coderabbi\Phpumoji\EmojiPrinter"
```

If you wish to select an emojiset for PHP emoji output, add the following additional line to the opening element of your `phpunit.xml`, specifying your selection:

``` php
emojiset="phpumoji"
```

The default emojiset is 'phpumoji'; currently that is the only emojiset available (soon, grasshopper... :sunglasses:).

## Usage

Usage of PHPUnit is unchanged with coderabbi/phpumoji.

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
