<?php
include_once 'intefaceAnimal.php';
class Cat implements AnimalInterface{
    public function getVoice(){
        echo 'miay';
    }
    public function getView(){
        echo 'cat';
    }
    public function getArial(){
        
    }
}