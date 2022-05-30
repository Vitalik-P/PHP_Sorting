<?php

namespace AppArrs\ArrayWriters;

use AppArrs\ArraySorting\ArraySorterFactory;

class FileWriter
{
    public function Write($inputArray, $outputArray, $sortingTypeIndex) {
        $text .= "Вхідний масив\n";
        $text .= $this->formatArray($inputArray);
        $text .= "\n" . ArraySorterFactory::$namesSortingTypes[$sortingTypeIndex] . "\n";
        $text .= $this->formatArray($outputArray);

        $fileForArray = fopen("Data/Files/Arrays/" .
        ArraySorterFactory::$classesSortingTypes[$sortingTypeIndex] .
        ".txt", "w") or die("Unable to open file!");
        
        fwrite($fileForArray, $text);
        fclose($fileForArray);
    }

    private function formatArray($array) {
        foreach ($array as $row) {
            foreach ($row as $column) {
                $text .= str_pad($column, 4, " ", STR_PAD_LEFT);
            }
            $text .= "\n";
        }
        return $text;
    }
}