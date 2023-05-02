<?php

class Film{

    //Attributs
    private string $title;
    private string $release;
    private int $time;
    private string $synopsis;
    private Director $director;
    private Actor $actor;
    private FilmType $filmType;
    private array $castings;


    //__construct
    public function __construct(string $title, string $release, int $time, string $synopsis, Director $director, Actor $actor, FilmType $filmType){

        $this->title = $title;
        $this->release = $release;
        $this->time = $time;
        $this->synopsis = $synopsis;

        $this->director = $director;
        $this->director->addReleasedFilms($this);
        
        $this->actor = $actor;
        
        $this->filmType = $filmType;
        $this->filmType->addFilmType($this);
        
        $this->castings = [];

    }

    //Methods

    public function addCasting(Casting $casting){
        $this->castings[] = $casting;
    }

    public function getAllActor(){
        $results = "<h2>In ". $this->getTitle() . ":</h2>";
			foreach($this->castings as $actor){
			$results .= "- " . $actor->getRole() . "was embodied by " . $actor->getActor() . "<br>";
        }
        return "<div class='card 5'>" . $results . "</div>";
    }
    //Getters and setters 

    public function getInfo(){

        return 
        "<h3>- " . $this->title .
        "</h3>- Date of release: " . $this->release . 
        "<br>- Duration: " . $this->time ."min
        <br>- Synopsis: " . $this->synopsis . 
        "<br>- Producer: " . $this->director->getCompletName();
        
    }

    //Title
    public function getTitle()
    {
        return  $this->title . "<br>";
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    //Release
    public function getRelease()
    {
        return " Year : " . $this->release . "<br>";
    }

    public function setRelease($release)
    {
        $this->release = $release;

        return $this;
    }

    //Time
    public function getTime()
    {
        return " Time : ". $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    //Synopsis
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

	//Director
	public function getDirector(): Director {
		return $this->director;
	}
	
	public function setDirector(Director $director): self {
		$this->director = $director;
		return $this;
	}

    //Actor
    public function getActor()
    {
        return $this->actor;
    }

    public function setActor($actor)
    {
        $this->actor = $actor;

        return $this;
    }

    //Type
	public function getFilmsTypes(): FilmType {
		return $this->filmType;
	}
	
	public function setFilmsTypes(FilmType $filmTypes): self {
		$this->filmType = $filmTypes;
		return $this;
	}

}