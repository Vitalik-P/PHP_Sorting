<?php

namespace AppArrs\ArrayWriters;

use AppArrs\ArraySorting\ArraySorterFactory;

class PageWriter
{

    // public function init() {
    //     $text .= "<!DOCTYPE html>\n";
    //     $text .= "<html>\n";
    //     $text .= "<style>\n";
    //     $text .= "table, th, td {\n";
    //     $text .= "border:1px solid black;\n";
    //     $text .= "}\n";
    //     $text .= "</style>\n";
    //     $text .= "<body>\n";

    // }

    public function Write($inputArray, $outputArray, $sortingTypeIndex) {

        $text .= "<div>\n";
        $text .= "<h3>Вхідний масив</h3>\n";
        $text .= $this->formatArray($inputArray);
        $text .= "\n<h3>" . ArraySorterFactory::$namesSortingTypes[$sortingTypeIndex] . "</h3>\n";
        $text .= $this->formatArray($outputArray);
        $text .= "</div>\n";

        echo $text;
    }

    private function formatArray($array) {
        
        $text .= "<table style=\"border:1px; text-align:right;\">\n";
        $text .= "<tbody>\n";
        foreach ($array as $row) {
            $text .= "<tr>\n";
            foreach ($row as $column) {
                // $text .= "<td>" . str_replace(' ', '&nbsp;', str_pad($column, 4, ' ', STR_PAD_LEFT)) . "</td>\n";
                $text .= "<td>" . $column . "</td>\n";
            }
            $text .= "</tr>\n";
        }
        $text .= "</tbody>\n";
        $text .= "</table>\n";
        return $text;
    }
}