# stickee Rector config

Provides a [Rector](https://github.com/rectorphp/rector) config for stickee projects.

## Installation

```shell
composer require --dev stickee/rector-config
cp vendor/stickee/rector-config/dist/rector.php rector.php
```

You must commit the `rector.php` config file.

## Usage

```shell
vendor/bin/rector process           # refactors code
vendor/bin/rector process --dry-run # shows you what it would do
```