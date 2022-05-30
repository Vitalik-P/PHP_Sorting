<?php
namespace AppArrs;//Application Arrays

class RandomArrayGenerator
{
    public function get2DArray($sizeOfArray = 3)
    {
        // Генерація і заповнення двовимірного масиву випадковими числами
        $ganeratedArray = array();
        for ($i = 0; $i < $sizeOfArray; $i++) {
            for ($j = 0;  $j < $sizeOfArray; $j++) {
                $ganeratedArray[$i][$j] = rand(1, $sizeOfArray * $sizeOfArray);
            }
        }
        return $ganeratedArray;
    }

}