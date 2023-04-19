<?php

class FilmType{

    //Attributs
    private string $genderName;
    private array $filmType;


    //__construct
    public function __construct(string $genderName){

        $this->genderName = $genderName;
        $this->filmType = [];
    }
    
    //Methods
    public function addFilmType(Film $title){
		$this->filmType[] = $title;
	}

	public function getTabOfTypes(){
			$results = "The movie of the gender '" . $this->genderName . "' are:<br>";
			foreach($this->filmType as $title){
			$results .= "- " . $title->getTitle() . "<br>";
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
}