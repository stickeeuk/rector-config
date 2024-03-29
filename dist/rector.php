<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelSetList;
use RectorLaravel\Set\LaravelLevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/app'
    ]);

    $rectorConfig->sets([
        SetList::DEAD_CODE,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE,
        SetList::TYPE_DECLARATION,
        LevelSetList::UP_TO_PHP_81,
        LaravelSetList::LARAVEL_CODE_QUALITY,
        LaravelLevelSetList::UP_TO_LARAVEL_90,
    ]);

    $rectorConfig->skip([
        \Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector::class, // removes @param from docblocks
        \Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector::class, // removes return from docblocks
        \Rector\CodingStyle\Rector\PostInc\PostIncDecToPreIncDecRector::class, // changes $i++ to ++$i
        \Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector::class, // changes "th{$is}" to sprintf('th%s', 'is')
        \Rector\Php80\Rector\FunctionLike\MixedTypeRector::class, // removes docblocks
    ]);

};
