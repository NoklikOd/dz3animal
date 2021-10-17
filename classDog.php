<?php
include_once 'intefaceAnimal.php';
class Dog implements AnimalInterface{
    public function getVoice(){
        echo 'gav';
    }
    public function getView(){
        echo 'dog';
    }
    public function getArial(){}
}