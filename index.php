<?php

spl_autoload_register(function ($class_name) {
    include "Classes/" . $class_name . '.php';
});

//NewDirector
$director1 = New Director("Bertuzzi", "Maxime", "Man", "30-03-1998");

//NewActor
$actor1 = New Actor("Mickael", "Keaton", "Man", "20-08-1968");
$actor2 = New Actor("Val", "Kilmer", "Man", "20-08-1968");
$actor3 = New Actor("George", "Clooney", "Man", "20-08-1968");

//NewFilm
$film1 = New Film("BatMan", "1999", 70, "Big shake eating some stuff", $director1);

//NewRole
$role1 = New Role("warzazatoun", $film1, $actor1);



echo $role1->getInfoRole();
