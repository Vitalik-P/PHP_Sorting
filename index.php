<?php

// keywords:
// Array
// GeneratorArray
// TypesArraySorting   - це стало зайвим після того як стало зрозуміло що це напсравді форматування називаєтсья
// SortingArray
// TypeSortingArray  - це конкретно вертикальне, горизонтальне і тд.

// Storage
// DataStorage

// Outputs
// WritePage
// WriteToFile
// WriteToDataBase
// MySQL
// inputArray
// outputArray

// Переназвати дечкі змінні і функції.
//try catch використати


require_once __DIR__ . '/vendor/autoload.php';


use AppArrs\ArraySorting\ArraySorterFactory;
use AppArrs\ArrayWriters\WriterFactory;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();



$sizeOfInputArray = 5;

$ArrGen = new AppArrs\RandomArrayGenerator();
$inputArray = $ArrGen->get2DArray($sizeOfInputArray);//outputArrayget2DArray($sizeArray = 3);

$convertArray = new AppArrs\ArraySorting\Convert2DTo1DSortedArray();//use AppArrs\ArraySorting\Convert2DTo1DSortedArray;
$arrayForSorting = ($convertArray)->convert2DTo1DSortedArray($inputArray, $sizeOfInputArray);


$instanceFileWriter = WriterFactory::getWriterInstance("FileWriter");
$instancePageWriter = WriterFactory::getWriterInstance("PageWriter");

foreach (ArraySorterFactory::$classesSortingTypes as $index => $sortingType)// $index = array_search($sortingType, ArraySorterFactory::$classesSortingTypes);
{
    $sortInstatnse = ArraySorterFactory::getSorterInstance($sortingType);
    $sortedArray = $sortInstatnse->getSortingArray($arrayForSorting, $sizeOfInputArray);
    
    $instancePageWriter->Write($inputArray, $sortedArray, $index);
    $instanceFileWriter->Write($inputArray, $sortedArray, $index);
}