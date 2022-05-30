<?php

namespace AppArrs\ArraySorting;

class Convert2DTo1DSortedArray
{
    public function convert2DTo1DSortedArray(array $inputArray, int $sizeOfInputArray)
    {
        $arrayForSorting = array();
        // Запис двовимірного масиву в одновимірний
        for ($i = 0; $i < $sizeOfInputArray; $i++) {
            for ($j = 0;  $j < $sizeOfInputArray; $j++) {
                $arrayForSorting[$i*$sizeOfInputArray + $j] = $inputArray[$i][$j];
            }
        }
        // Сортування одновимірного масиву
        sort($arrayForSorting);//=resSorting
        return $arrayForSorting;
    }
}