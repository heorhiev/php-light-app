<?php

namespace light\app\services;


class AliasService
{
    public static function getAlias(string $value): string
    {
        return str_replace(array_keys(ALIASES), ALIASES, $value);
    }
}