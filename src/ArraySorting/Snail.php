<?php

namespace AppArrs\ArraySorting;


class Snail
{
    public function getSortingArray(array $arrayForSorting, $sizeOfInputArray): array
    {
        // Сортування равликом
        $snailSortedArray = array();

        $arraySortingShift = $arrayForSorting;
        $x = -1;
        $y = 0;
        $xIterate = 1;
        $yIterate = 0;
        $sizeOfLineArray = $sizeOfInputArray - 1;
        $i = 0;

        $valueArraySorting = 0;
        foreach ($arrayForSorting as $valueArraySorting) {
            if ($i > $sizeOfLineArray) {
                if ($xIterate === 1) {
                    $xIterate = 0;
                    $yIterate = 1;
                    $sizeOfLineArray -= 1;
                } elseif ($yIterate === 1) {
                    $xIterate = -1;
                    $yIterate = 0;
                } elseif ($xIterate === -1) {
                    $xIterate = 0;
                    $yIterate = -1;
                    $sizeOfLineArray -= 1;
                } elseif ($yIterate === -1) {
                    $xIterate = 1;
                    $yIterate = 0;
                }
                $i = 0;
            }
            $i += 1;
            $x += $xIterate;
            $y += $yIterate;
            
            $snailSortedArray[$y][$x] = $valueArraySorting;
        }
        return $snailSortedArray;
    }
}