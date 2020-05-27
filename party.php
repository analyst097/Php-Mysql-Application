<?php

class Party{
    function __construct(){
        echo "Constructed\n";
    }
    function something(){
        echo "Something\n";
    }
    function __destruct()
    {
        echo "Destructed\n";
    }
}

$d = new Party();
$d->something();

?>