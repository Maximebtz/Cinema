<?php

class FilmType{

    //Attributs
    private string $genderName;
    private array $films;


    //__construct
    public function __construct(string $genderName){

        $this->genderName = $genderName;
        $this->films = [];
    }
    //Methods
    public function addFilmType(FilmType $film){
		$this->films[] = $film;
	}

	public function getTabOfTypes(){
			$results = "The movie of the gender '" . $this->genderName . "' are:<br>";
			foreach($this->films as $film){
			$results .= "- " . $film . "<br>";
        }
        return $results;
	}

    //Getters and setters
	public function getGenderName(): string {
		return $this->genderName;
	}
	
	public function setGenderName(string $genderName): self {
		$this->genderName = $genderName;
		return $this;
	}

    public function __toString(){
        return $this->genderName;
    }
}