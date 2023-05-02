<?php
class Director extends Person{

    // Attributs
    private array $films;


    // __construct
    public function __construct(string $name, string $surname, string $gender, string $dob){
        parent::__construct( $name,  $surname,  $gender,  $dob);
        $this->films = [];
    }
    

    // Methods
    public function addReleasedFilms(Film $film){
        $this->films[] = $film;
    }

    public function getDirectorFilms(){
        $results = "<h2>" . $this->getCompletName() . " has made these films :</h2>";
        $films = [];
        foreach($this->films as $film){
            if(!in_array($film->getTitle(), $films)){ //verification que si le film n'est pas déjà affiché 
                $results .= $film->getTitle() . $film->getRelease() . $film->getTime() . "<br><br>";
                $films[] = $film->getTitle();
            }
        }
        return "<div class='card 1'>" . $results . "</div>";
    }
    

    // Getters and setters
    public function getFilms()
    {
        return $this->films;
    }

    public function setFilms($films)
    {
        $this->films = $films;

        return $this;
    }
}