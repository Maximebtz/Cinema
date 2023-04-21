<?php

class Role{
    
    //Attributs
    private string $roleName;
    private Film $film;
    private Casting $casting;
    private array $actors;

    
    //__construct

    public function __construct(string $roleName, Film $film,  Casting $casting){

        $this->roleName = $roleName;
        $this->film = $film;
        $this->casting = $casting;
        $this->casting->addRoleActors($this);
        $this->actors = [];
    }

    //Methods

    public function addActors(Actor $actor){
        $this->actors[] = $actor;
    }

    //Getters and setters

    public function getInfoRole(){
        return "<h2>Roles :</h2> <br>" .
        "The actors who played the role of <strong> " . $this->getRoleName() . ": <strong>". $this->casting->getActors() . "</strong>";
    
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


    //Casting
    public function getCasting()
    {
        return $this->casting;
    }

    public function setCasting($casting)
    {
        $this->casting = $casting;

        return $this;
    }
}
?>