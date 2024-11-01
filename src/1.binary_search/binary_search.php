<?php

declare(strict_types=1);

namespace Kxov\Grok\binary_search;

function binary_search(array $list, int $item): int
{
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) {
        $mid = (int)floor(($low + $high) / 2);
        $guess = $list[$mid];

        if ($guess === $item) {
            return $mid;
        }
        if ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    return -1;
}


function binary_search_recursive(array $list, int $item, int $low = 0, int $high = null): int
{
    if ($low > $high) return -1;
    $mid = $low + (int)floor(($high - $low) / 2);
    if ($list[$mid] === $item) return $mid;
    if ($list[$mid] < $item) return binary_search_recursive($list, $item, $mid + 1, $high);
    return binary_search_recursive($list, $item, $low, $mid - 1);
}