<?php

namespace light\app\services;


class DtoService
{
    public function __construct($attributes)
    {
        foreach ($attributes as $property => $value) {
            $this->{$property} = is_object($value) ? (array) $value : $value;
        }
    }
}