<?php

include_once 'intefaceAnimal.php';
class Delphi implements AnimalInterface{
    public function getVoice(){
        echo 'krya-krya';
    }
    public function getView(){
        echo 'delphi';
    }
    public function getArial(){}
}
