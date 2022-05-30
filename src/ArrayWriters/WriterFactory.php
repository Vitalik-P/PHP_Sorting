<?php

namespace AppArrs\ArrayWriters;

class WriterFactory
{
    public static array $writerClasses = [//private
        "PageWriter",
        "FileWriter",
        "DBWriter"
    ];

    // public function __get($nameWriter) {
    //     return self::$writerClasses[$nameWriter];
    // }

    public static function getWriterInstance($nameWriter)
    {
        if (in_array($nameWriter, self::$writerClasses)) {
            return new ("AppArrs\\ArrayWriters\\" . $nameWriter)();
        }
    }
}