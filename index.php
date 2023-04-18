<?php

spl_autoload_register(function ($class_name) {
    include "Classes/" . $class_name . '.php';
});


$director1 = New Director("Bertuzzi", "Maxime", "Man", "30-03-1998");

$film1 = New Film("MaxLaMenace", "1999", 70, "Big shake eating some stuff", $director1);


echo $film1->getInfo();