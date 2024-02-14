<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelSetList;
use RectorLaravel\Set\LaravelLevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app'
    ])
    ->withPhpSets() // picks up version from composer.json
    ->withPreparedSets(
        codeQuality: true,
        codingStyle: true,
        deadCode: true,
        typeDeclarations: true,
    )
    ->withSets([
        LaravelSetList::LARAVEL_CODE_QUALITY,
        LaravelLevelSetList::UP_TO_LARAVEL_90,
    ])
    ->withSkip([
        \Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector::class, // removes @param from docblocks
        \Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector::class, // removes return from docblocks
        \Rector\CodingStyle\Rector\PostInc\PostIncDecToPreIncDecRector::class, // changes $i++ to ++$i
        \Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector::class, // changes "th{$is}" to sprintf('th%s', 'is')
        \Rector\Php80\Rector\FunctionLike\MixedTypeRector::class, // removes docblocks
    ])
;
