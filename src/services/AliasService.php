<?php

namespace light\app\services;


class AliasService
{
    public static $aliases = [];


    public static function setPaths($paths): void
    {
        self::$aliases = array_merge(self::$aliases, $paths);
    }


    public static function setPath(string $alias, string $path): void
    {
        self::$aliases[$alias] = $path;
    }


    public static function getPath(string $value): string
    {
        return str_replace(array_keys(self::$aliases), self::$aliases, $value);
    }
}