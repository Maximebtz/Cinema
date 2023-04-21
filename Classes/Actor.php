<?php

class Actor extends Person{

    private array $roles;


    //__construct
    public function __construct(string $name, string $surname, string $gender, string $dob){

        parent::__construct( $name, $surname, $gender, $dob);
        $this->roles = [];
    }

    //Methods

    
    

    public function getRole()
    {
        return $this->roles;
    }

    
    public function setRole($role)
    {
        $this->roles = $role;

        return $this;
    }
}