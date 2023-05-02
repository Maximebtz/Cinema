<?php

class Role{
    
    //Attributs
    private string $roleName;
    private array $castings;

    
    //__construct

    public function __construct(string $roleName){

        $this->roleName = $roleName;
        
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
        return "<div class='card 3'>" . $results . "</div>";
    }


    public function __toString(){
        return "Role played : " . $this->getRoleName() . "<br>";
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
}
?>