<?php

class Casting{

    private Film $film;
    private Actor $actor;
    private Role $role;

    

    public function __construct(Film $film, Actor $actor, Role $role){

        $this->film = $film;
        $this->actor = $actor;
        $this->role = $role;

        $this->film->addCasting($this);
        $this->actor->addCasting($this);
        $this->role->addCasting($this);

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