<?php
include_once 'classCat.php';
include_once 'classDog.php';
include_once 'classDelphi.php';
class AnimalList 
{
    public static $arrAnimal;

    public static function add(AnimalInterface $animal)
    {
        static::$arrAnimal[]=$animal;
    }
    public static function all()
    {
        return static::$arrAnimal ?? [];
    }
}