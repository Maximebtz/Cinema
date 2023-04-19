<?php

class Role{
    
    //Attributs
    private string $roleName;
    private Film $film;
    private Actor $actor;

    
    //__construct

    public function __construct(string $roleName, Film $film, Actor $actor){

        $this->roleName = $roleName;
        $this->film = $film;
        $this->actor = $actor;

    }

    //Methods

    //Getters and setters

    public function getInfoRole(){
        return "<h2>Roles :</h2> <br>" .
        "The actors who played the role of <strong> " . $this->getRoleName() . ": <strong>". $this->actor->getName() . " " .$this->actor->getSurname() . "</strong>";
        
    }
    //RoleName
    public function getRoleName()
    {
        return $this->roleName;
    }

    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;

        return $this;
    }

    //Film
    public function getFilm()
    {
        return $this->film;
    }

    
    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

    //Actor
    public function getActor()
    {
        return $this->actor;
    }

    public function setActor($actor)
    {
        $this->actor = $actor;

        return $this;
    }
}
?>