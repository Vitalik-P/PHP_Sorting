<?php

namespace AppArrs\ArraySorting;


class Snake
{
    public function getSortingArray(array $arrayForSorting, $sizeOfInputArray): array
    {
        // Сортування змійкою
        $sneakSortedArray = array();

        for ($i = 0; $i < $sizeOfInputArray; $i++) {
            for ($j = 0;  $j < $sizeOfInputArray; $j++) {
                $sneakSortedArray[$i][$j] = $arrayForSorting[$i * $sizeOfInputArray + $j * (1- ($i % 2) * 2) + ($sizeOfInputArray - 1) * ($i % 2)];
            }
        }
        return $sneakSortedArray;
    }
}