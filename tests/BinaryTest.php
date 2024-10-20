<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use function Kxov\Grok\binary_search\binary_search;

class BinaryTest extends TestCase
{
    public function testBinary()
    {
        $this->assertEquals(1, binary_search([], 1));
    }
}