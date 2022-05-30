<?php

namespace AppArrs\ArraySorting;


class Horizontal
{
    public function getSortingArray(array $arrayForSorting, $sizeOfInputArray): array
    {
        // Горизонтальне сортування
        $horizontallySortedArray = array();

        for ($i = 0; $i < $sizeOfInputArray; $i++) {
            for ($j = 0;  $j < $sizeOfInputArray; $j++) {
                $horizontallySortedArray[$i][$j] = $arrayForSorting[$i*$sizeOfInputArray + $j];
            }
        }
        return $horizontallySortedArray;
    }
}