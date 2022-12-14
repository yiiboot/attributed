<p align="center">
    <a href="https://github.com/yiiboot" target="_blank">
        <img src="https://avatars.githubusercontent.com/u/118281946?s=600&u=b16475d97095b69a8f500ec2f29b8d05c3d02b3a&v=4" height="100px">
    </a>
    <h1 align="center">Yii Boot Attributed</h1>
    <br>
</p>

## Requirements

- PHP 8.1 or higher.

## Installation

The package could be installed with composer:

```shell
composer require yiiboot/attributed
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

The Yii Attributed is free software. It is released under the terms of the Apache-2.0 License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Boot](https://github.com/yiiboot).

## Support the project

[![Open Collective](https://img.shields.io/badge/Open%20Collective-sponsor-7eadf1?logo=open%20collective&logoColor=7eadf1&labelColor=555555)](https://opencollective.com/yiiboot)

## Follow updates

[![Official website](https://img.shields.io/badge/Powered_by-Yii_Boot-green.svg?style=flat)](https://www.yiiframework.com/)

## Inspired && Thanks

- [Yii Software](https://github.com/yiisoft)
- [Yii Stack](https://github.com/yiistack)
- [Symfony](https://github.com/symfony/symfony)
