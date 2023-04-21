<?php

class Casting{

    private Film $film;
    private Actor $actor;
    private Role $role;

    private array $films;
    private array $actors;
    private array $roles;

    public function __construct(Film $film, Actor $actor, Role $role){

        $this->film = $film;
        $this->actor = $actor;
        $this->role = $role;

        $this->films = [];
        $this->actors = [];
        $this->roles = [];
    }

    
    public function addFilms(Film $film){
        $this->films[] = $film;
    }
    public function addActors(Actor $actor){
        $this->actors[] = $actor;
    }
    public function addRoleActors(Role $roleName){
        $this->roles[] = $roleName;
    }
    public function getActorRoles()
{
    $results = "<h2>Roles :</h2> <br>";
    
    foreach($this->roles as $role) {
        $results .= "The role of <strong>" . $role->getRoleName() . "</strong> in the film <strong>" . $role->getFilm()->getTitle() . "</strong> has played by :<br>";
    }
    
    return $results;
}

     
    public function getRoles()
    {
        return $this->roles;
    }

     
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

     
    public function getActors()
    {
        return $this->actors;
    }

    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }
 
    public function getFilms()
    {
        return $this->films;
    }

    
    public function setFilms($films)
    {
        $this->films = $films;

        return $this;
    }

    public function getFilm()
    {
        return $this->film;
    }

    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }
 
    public function getActor()
    {
        return $this->actor;
    }

    public function setActor($actor)
    {
        $this->actor = $actor;

        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}