<?php

namespace AppArrs\ArraySorting;


class Vertical
{
    public function getSortingArray(array $arrayForSorting, $sizeOfInputArray): array
    {
        // Вертикальне сортування
        $verticallySortedArray = array();

        for ($i = 0; $i < $sizeOfInputArray; $i++) {
            for ($j = 0;  $j < $sizeOfInputArray; $j++) {
                $verticallySortedArray[$i][$j] = $arrayForSorting[$j*$sizeOfInputArray + $i];
            }
        }
        return $verticallySortedArray;
    }
}