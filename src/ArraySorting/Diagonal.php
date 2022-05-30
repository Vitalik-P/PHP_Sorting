<?php

namespace AppArrs\ArraySorting;


class Diagonal
{
    public function getSortingArray(array $arrayForSorting, $sizeOfInputArray): array
    {
        // Діагональне сортування
        $diagonalSortedArray = array();

        // for ($i = 0; $i < ($sizeOfInputArray * 2 - 1); $i++) {
        //     for ($j = 0;  $j <= $i + ($sizeOfInputArray - $i * 2) * intdiv($i, $sizeOfInputArray); $j++) {
        //         $diagonalSortedArray[($i - $sizeOfInputArray) * intdiv($i, $sizeOfInputArray) + $sizeOfInputArray - $j][$j + ($sizeOfInputArray - $j * 2) * intdiv($i, $sizeOfInputArray)] = $arrayForSorting[i];
        //     }
        // }
        $arraySortingShift = $arrayForSorting;
        for ($i = 0; $i < $sizeOfInputArray; $i++) {
            for ($j = 0;  $j <= $i; $j++) {
                $diagonalSortedArray[$i - $j][$j] = array_shift($arraySortingShift);
            }
        }
        for ($i = $sizeOfInputArray - 2; $i >= 0; $i--) {
            for ($j = 0;  $j <= $i; $j++) {
                $diagonalSortedArray[$sizeOfInputArray - 1 - $j][$sizeOfInputArray - 1 - $i + $j] = array_shift($arraySortingShift);
            }
        }
        return $diagonalSortedArray;
    }
}