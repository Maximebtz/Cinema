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

//NewGenre
$action = New FilmType("Action");

//NewFilm
$film1 = New Film("BatMan", "1999", 70, "Big shake eating some stuff", $director1, $action);
$film2 = New Film("Taken", "egbegbe", 70, "Big egbegb eating some stuff", $director1, $action);
$film3 = New Film("Taken 2", "bebeg", 70, "Big shake ebegb some stuff", $director1, $action);

//NewRole
$role1 = New Role("BatMan", $film1, $actor1);

echo $action->getTabOfTypes();

// echo $role1->getInfoRole();