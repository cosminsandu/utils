<?php

declare(strict_types=1);

namespace CosminSandu\Utils;

class Size
{
    public static function readableBytes(int $bytes, $dec = 2): string
    {
        $size = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

        for ($index = 0; abs($bytes) >= 1024; $index++) {
            $bytes /= 1024;
        }

        return round($bytes, $dec) . ' ' . $size[$index];
    }
}