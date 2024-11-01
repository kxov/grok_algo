<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use function Kxov\Grok\binary_search\binary_search;
use function Kxov\Grok\binary_search\binary_search_recursive;

class BinaryTest extends TestCase
{
    public function testBinary()
    {
        $this->assertEquals(-1, binary_search([1, 3, 5, 7, 9], 13));
        $this->assertEquals(1, binary_search([1, 3, 5, 7, 9], 3));
        $this->assertEquals(3, binary_search([1, 3, 5, 7, 9], 7));

        $this->assertEquals(-1, binary_search_recursive([1, 3, 5, 7, 9], 13, 0, 4));
        $this->assertEquals(2, binary_search_recursive([1, 3, 5, 7, 9], 5, 0, 4));
        $this->assertEquals(3, binary_search_recursive([1, 3, 5, 7, 9], 7, 0, 4));
    }
}