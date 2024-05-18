<?php
    require_once('Animal.php');
    require_once('Frog.php');
    require_once('Ape.php');

    $animal = new Animal("shaun");

    echo "Name : "  . $animal->name . "<br>";
    echo "legs : "  . $animal->legs . "<br>";
    echo "cold blooded : "  . $animal->coldBlooded . "<br> <br>";
    
    $frog = new Frog("buduk");

    echo "Name : "  . $frog->name . "<br>";
    echo "legs : "  . $frog->legs . "<br>";
    echo "cold blooded : "  . $frog->coldBlooded . "<br>";
    echo  $frog->jump("Hop Hop");
    
    $ape = new Ape("kera sakti");

    echo "Name : "  . $ape->name . "<br>";
    echo "legs : "  . $ape->legs . "<br>";
    echo "cold blooded : "  . $ape->coldBlooded . "<br>";
    echo  $ape->yell("Auooo");

?>