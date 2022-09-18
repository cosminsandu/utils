<?php

use CosminSandu\Utils\Size;
use PHPUnit\Framework\TestCase;

class SizeTest extends TestCase
{
    public function testReadableBytes()
    {
        self::assertEquals("0 B", Size::readableBytes(0));
        self::assertEquals("1000 B", Size::readableBytes(1000));

        self::assertEquals("1 KB", Size::readableBytes(1024));
        self::assertEquals("1.95 KB", Size::readableBytes(2000));
        self::assertEquals("2 KB", Size::readableBytes(2048));

        self::assertEquals("1 MB", Size::readableBytes(1024*1024));
        self::assertEquals("3 MB", Size::readableBytes(1024*1024*3));

        self::assertEquals("1 GB", Size::readableBytes(1024*1024*1024));
        self::assertEquals("10 GB", Size::readableBytes(1024*1024*1024*10));

        self::assertEquals("1 TB", Size::readableBytes(1024*1024*1024*1024));
        self::assertEquals("648.37 TB", Size::readableBytes(712893712304234));

        self::assertEquals("1 PB", Size::readableBytes(1024*1024*1024*1024*1024));

        self::assertEquals("1 EB", Size::readableBytes(1024*1024*1024*1024*1024*1024));

        // EDGE cases:
        self::assertEquals("-1.95 KB", Size::readableBytes(-2000));
        self::assertEquals("8 EB", Size::readableBytes(PHP_INT_MAX ));
        self::assertEquals("-8 EB", Size::readableBytes(PHP_INT_MIN ));




    }


}
