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
			$results = "<h2>The movie of the gender '" . $this->genderName . "' are :</h2>";
			$filmsType = [];
			foreach($this->filmType as $title){
				if(!in_array($title->getTitle(), $filmsType)){
					$results .=  $title->getTitle();
					$filmsType[] = $title->getTitle();
				}
        }

        return "<div class='card 2'>" . $results . "</div>";
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