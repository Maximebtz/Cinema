<?php


class Person{


    //Attributs
    private string $name;
    private string $surname;
    private string $gender;
    private DateTime $dob;
    private array $filmTypes;

    //__construct
    public function __construct(string $name, string $surname, string $gender, string $dob){

        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->dob = New DateTime($dob);
        $this->filmTypes = [];
    }

    //Methods

    public function addGendersFilm(FilmType $filmType){
		$this->filmTypes[] = $filmType;
	}
	public function getTabOfTypes(){
			$results = "Books of " . $this . ":<br>";
			foreach($this->filmTypes as $filmType){
			$results .= "- " . $this->genderName . "<br>";
        }
        return $results;
	}


    //Getters and setters

    public function getCompletName(){
        return $this->name . " " . $this->surname;
    }
    //Name
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    //Surname
   public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }


    //Gender
    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }


    //Date of birth
    public function getDob()
    {
        return $this->dob->format("d-m-Y");
    }

   public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }
}

?>