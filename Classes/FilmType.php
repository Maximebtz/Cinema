<?php

class FilmType{

    //Attributs
    private string $genderName;


    //__construct
    public function __construct(string $genderName){

        $this->genderName = $genderName;
        
    }

    //Getters and setters
	public function getGenderName(): string {
		return $this->genderName;
	}
	
	public function setGenderName(string $genderName): self {
		$this->genderName = $genderName;
		return $this;
	}
}