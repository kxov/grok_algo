<?php

declare(strict_types=1);

namespace Kxov\Grok\selection_sort;

function selection_sort(array $array): array
{
    $n = count($array);

    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
        }

        if ($minIndex !== $i) {
            $temp = $array[$i];
            $array[$i] = $array[$minIndex];
            $array[$minIndex] = $temp;
        }
    }

    return $array;
}
