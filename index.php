<?php
include_once 'classAnimal.php';
AnimalList::add(new Cat);
AnimalList::add(new Dog);
AnimalList::add(new Delphi);


foreach(AnimalList::all() as $l)
{
    $l->getVoice();
    echo "<hr>";
    $l->getView();
    echo "<hr>";
    
    
}
