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

## Usage

Usage of PHPUnit is unchanged with coderabbi/phpumoji.

## Options

### Select a Different Emojiset

If you wish to select an emojiset for PHPUnit emoji output, add the following additional line to the opening element of your `phpunit.xml`, specifying your selection:

``` php
emojiset="phpumoji"
```

### Create a Custom Emojiset

The default emojiset is 'phpumoji'; currently that is the only emojiset available (soon, grasshopper... :sunglasses:).

If, however, you wish to create your own emojiset for PHPUnit emoji output, simply place an `.emojifile` in your project root and define your emojiset in the following format:

``` ini
[phpumoji]
error = bomb
failure = poop
incomplete = construction
risky= game_die
skipped = see_no_evil
pass = elephant

[weird]
error = no_entry
failure = red_flag
incomplete = question
risky= clown
skipped = ghost
pass = monkey
```

Note that the values in the emojiset are snale-cased emoji short codes *without the opening and closing colons*; most existing short codes are supported, a list of supported shortcodes will be added soon.

You may choose to override one or more of the packaged emojisets (as in the case of "phumoji", above, which overrides the default emojiset), or you may define your own (as in the case of "weird", above).

Don't forget to update the opening element of your `phpunit.xml` with `emojiset="<your_selection>"`, just as you would to select one of the non-default packaged emojisets.

The order of precedence is the specified emojiset in `.emojifile`, the specified emojiset from the packaged emojisets, the "phpumoji" emojiset from your `.emojifile`, and finally the  the "phpumoji" emojiset from the packaged emojisets.  

## Changelog

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
