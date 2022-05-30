<?php

namespace AppArrs\ArraySorting;

class ArraySorterFactory
{
    // Кожен із класі мав би реалізовувати інтерфейс із методом getSortingArray
    public static array $classesSortingTypes = [        //Можливо змінити видимість на protected
        "Horizontal",
        "Vertical",
        "Snake",
        "Diagonal",
        "Snail",
    ];
    
    // Порядок повинен збігатися з іменами класів у масиві $classesSortingTypes
    // Цей масив не варто об'єднувати із $classesSortingTypes,
    // оскільки для останього використовуються foreach для перебору всіх класів,
    // а $namesSortingTypes це по суті локалізація, яких може бути багато
    public static array $namesSortingTypes = [
        "Горизонтальне сортування",
        "Вертикальне сортування",
        "Сортування змійкою",
        "Діагональне сортування",
        "Сортування равликом",
    ];

    // public function __get($sortingType) {
    //     return self::$classesSortingTypes[$sortingType];
    // }

    public static function getSorterInstance($sortingType)
    {
        if (in_array($sortingType, self::$classesSortingTypes)) {
            return new ("AppArrs\\ArraySorting\\" . $sortingType)();//$pathClass
        }
    }
}