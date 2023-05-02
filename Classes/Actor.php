<?php

class Actor extends Person{

    private array $roles;
    private array $castings;

    // __construct
    public function __construct(string $name, string $surname, string $gender, string $dob){
        parent::__construct( $name,  $surname,  $gender,  $dob);
        
        $this->roles = [];
        $this->castings = [];
    }
    

    // Methods
    public function addRole(Role $role){
        $this->roles[] = $role;
    }
    public function addCasting(Casting $casting){
        $this->castings[] = $casting;
    }



    public function getAllFilms(){
        $results = "<h2>The films in which <strong>" . $this->getCompletName() . "</strong> has played :</h2>"; 
            
    
        foreach($this->castings as $casting){
            if($casting->getActor() === $this){
                $results .= $casting->getFilm()->getInfo() . "<br>";
            }
        }
        
        return "<div class='card 4'>" . $results . "</div>";
    }


    // Getters and setters


    //Roles
    public function getRoles()
    {   
         return $this->roles; 
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    public function getCastings()
    {
        return $this->castings;
    }

    public function setCastings($castings)
    {
        $this->castings = $castings;

        return $this;
    }
}