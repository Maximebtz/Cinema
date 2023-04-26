<?php

class Role{
    
    //Attributs
    private string $roleName;
    private Film $film;
    private Actor $actor;
    private array $castings;

    
    //__construct

    public function __construct(string $roleName, Film $film,  Actor $actor){

        $this->roleName = $roleName;
        $this->film = $film;
        $this->actor = $actor;
        
        $this->castings = [];
    }

    //Methods


    public function addCasting(Casting $casting){
        $this->castings[] = $casting;
    }
    public function getInfoRole(){
        $results = "<h2>The actors who played the role of " . $this->roleName . " :</h2>";
    
        foreach($this->castings as $casting){
            if($casting->getRole() === $this){
                $results .= "- " . $casting->getActor()->getCompletName() . "<br>";
            }
        }
        return "<div class='card'>" . $results . "</div>";
    }

    
    //Getters and setters

    
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