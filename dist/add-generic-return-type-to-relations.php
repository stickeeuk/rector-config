<?php declare(strict_types=1);

use Rector\Config\RectorConfig;

/** https://gist.github.com/canvural/7385ec70d2719e9961886430fbb4798c */
return RectorConfig::configure()
    ->withPaths([__DIR__ . '/app'])
    ->withRules([
        \RectorLaravel\Rector\ClassMethod\AddGenericReturnTypeToRelationsRector::class,
    ]);