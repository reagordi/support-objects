<p align="center">
    <a href="https://github.com/reagordi" target="_blank">
        <img src="https://raw.githubusercontent.com/reagordi/docs/main/images/logo.png" alt="Reagordi" height="100px">
    </a>
    <h1 align="center">Reagordi Support Objects</h1>
    <br>
</p>

[![Latest Stable Version](https://poser.pugx.org/reagordi/support-objects/v/stable.png)](https://packagist.org/packages/reagordi/support-objects)
[![Total Downloads](https://poser.pugx.org/reagordi/support-objects/downloads.png)](https://packagist.org/packages/reagordi/support-objects)
[![Build status](https://github.com/reagordi/support-objects/workflows/build/badge.svg)](https://github.com/reagordi/support-objects/actions?query=workflow%3Abuild)
[![Code Coverage](https://codecov.io/gh/reagordi/support-objects/branch/master/graph/badge.svg)](https://codecov.io/gh/reagordi/support-objects)

[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Freagordi%2Fsupport-objects%2Fmain)](https://dashboard.stryker-mutator.io/reports/github.com/reagordi/support-objects/main)

[![static analysis](https://github.com/reagordi/support-objects/workflows/static%20analysis/badge.svg)](https://github.com/reagordi/support-objects/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/reagordi/support-objects/coverage.svg)](https://shepherd.dev/github/reagordi/support-objects)
[![psalm-level](https://shepherd.dev/github/reagordi/support-objects/level.svg)](https://shepherd.dev/github/reagordi/support-objects)

Designed to work with objects

## Requirements

- PHP 8.2 or higher.

## Installation

The package could be installed with composer:

```shell
composer require reagordi/support-objects
```

## General usage

## Testing

### Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```shell
./vendor/bin/phpunit
```

### Mutation testing

The package tests are checked with [Infection](https://infection.github.io/) mutation framework with
[Infection Static Analysis Plugin](https://github.com/Roave/infection-static-analysis-plugin). To run it:

```shell
./vendor/bin/roave-infection-static-analysis-plugin
```

### Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/). To run static analysis:

```shell
./vendor/bin/psalm
```

### Code style

Use [Rector](https://github.com/rectorphp/rector) to make codebase follow some specific rules or
use either newest or any specific version of PHP:

```shell
./vendor/bin/rector
```

### Dependencies

Use [ComposerRequireChecker](https://github.com/maglnet/ComposerRequireChecker) to detect transitive
[Composer](https://getcomposer.org/) dependencies.

## License

The Reagordi Support Objects is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Reagordi Group](https://reagordi.com/).

## Support the project

[![Open Collective](https://img.shields.io/badge/Open%20Collective-sponsor-7eadf1?logo=open%20collective&logoColor=7eadf1&labelColor=555555)](https://opencollective.com/reagordi)

## Follow updates

[![Official website](https://img.shields.io/badge/Powered_by-Reagordi_Framework-green.svg?style=flat)](https://reagordi.com/)
[![Telegram](https://img.shields.io/badge/telegram-join-1DA1F2?style=flat&logo=telegram)](https://t.me/reagordi)
