# stickee Rector config

Provides a [Rector](https://github.com/rectorphp/rector) config for stickee projects.

## Installation

```shell
mkdir -p tools/rector
composer require --working-dir=tools/rector stickee/rector-config
cp tools/rector/vendor/stickee/rector-config/dist/rector.php rector.php
```

You must commit this new directory and the `rector.php` config file.

_[Why do we install Rector into its own directory?](https://github.com/FriendsOfPHP/PHP-CS-Fixer#installation)_

## Usage

```shell
tools/rector/vendor/bin/rector process           # refactors code
tools/rector/vendor/bin/rector process --dry-run # shows you what it would do
```