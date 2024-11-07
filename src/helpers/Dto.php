<?php

namespace light\app\helpers;


class Dto
{
    public function __construct($attributes)
    {
        foreach ($attributes as $property => $value) {
            $this->{$property} = is_object($value) ? (array) $value : $value;
        }
    }
}