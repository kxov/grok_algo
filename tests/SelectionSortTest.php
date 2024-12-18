<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use function Kxov\Grok\selection_sort\selection_sort;

class SelectionSortTest extends TestCase
{
    public function testSelectionSort()
    {
        $this->assertEquals([1, 5, 8, 13], selection_sort([8, 5, 1, 13]));
        $this->assertEquals([0, 6, 10, 17, 33, 51], selection_sort([10, 51, 33, 17, 6, 0]));
    }
}