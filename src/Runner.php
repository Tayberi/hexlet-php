<?php
  
namespace Hexlet\Php\Runner;

function run()
{
    $collection = collect(['taylor', 'abigail', 'taiberi'])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}