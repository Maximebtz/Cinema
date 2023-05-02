<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Styles/index.css">
    <title>Document</title>
</head>
<body>

<div class="content">
<?php

spl_autoload_register(function ($class_name) {
    include "Classes/" . $class_name . '.php';
});

//NewDirector
$director1 = New Director("Bertuzzi", "Maxime", "Man", "30-03-1998");


//NewCasting

//NewActor
$actor1 = New Actor("Mickael", "Keaton", "Man", "20-08-1968");
$actor2 = New Actor("Val", "Kilmer", "Man", "20-08-1968");
$actor3 = New Actor("George", "Clooney", "Man", "20-08-1968");

//NewGenre
$action = New FilmType("Action");

//NewFilm
$film1 = New Film("BatMan", "1999", 70, "Big shake eating some stuff", $director1,$actor1, $action);
$film1 = New Film("BatMan", "1999", 70, "Big shake eating some stuff", $director1,$actor2, $action);
$film1 = New Film("BatMan", "1999", 70, "Big shake eating some stuff", $director1,$actor3, $action);
$film2 = New Film("Taken", "2005", 142, "Big egbegb eating some stuff", $director1,$actor3, $action);
$film3 = New Film("Taken 2", "2011", 110, "Big shake ebegb some stuff", $director1,$actor3, $action);

//NewRole
$role1 = New Role("BatMan");
$role2 = New Role("Principal Actor");
$role3 = New Role("Joker");

$castingBatman = New Casting($film1, $actor1, $role1);
$castingBatman = New Casting($film1, $actor2, $role2);
$castingBatman = New Casting($film1, $actor3, $role3);
$castingTaken = New Casting($film2, $actor1, $role2);



echo $director1->getDirectorFilms();
echo $action->getTabOfTypes();
echo $role1->getInfoRole();
echo $actor1->getAllFilms();
echo $film1->getAllActor();


?>
</div>
</body>
</html>

