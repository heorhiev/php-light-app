<?php

namespace light\app\services;



class RenderService
{
    public static function template(string $filename, array $attributes = []): void
    {
        if ($attributes) {
            extract($attributes);
        }

        include(self::getPath($filename));
    }


    public static function get(string $filename, array $attributes = []): string
    {
        ob_start();

        self::template($filename, $attributes);

        return trim(ob_get_clean());
    }


    public static function exists(string $filename): bool
    {
        return file_exists(self::getPath($filename));
    }


    private static function getPath(string $filename): string
    {
        if (strstr($filename, '@')) {
            $filename = AliasService::getPath($filename);
        }

        return $filename . '.php';
    }
}
