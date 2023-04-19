<?php

class film{

    //Attributs
    private string $title;
    private string $release;
    private int $time;
    private string $synopsis;
    private Director $director;
    private FilmType $filmType;


    //__construct
    public function __construct(string $title, string $release, int $time, string $synopsis, Director $director, FilmType $filmType){

        $this->title = $title;
        $this->release = $release;
        $this->time = $time;
        $this->synopsis = $synopsis;
        $this->director = $director;
        $this->filmType = $filmType;
        $this->filmType->addFilmType($this);
    }

    //Methods


    //Getters and setters 

    public function getInfo(){

        return "<h2>New Film:</h2>
        - Title: " . $this->title .
        "<br>- Date of release: " . $this->release . 
        "<br>- Duration: " . $this->time ."min
        <br>- Synopsis: " . $this->synopsis . 
        "<br>- Director: " . $this->director->getCompletName();
        
    }

    //Title
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    //Release
    public function getRelease()
    {
        return $this->release;
    }

    public function setRelease($release)
    {
        $this->release = $release;

        return $this;
    }

    //Time
    public function getTime()
    {
        return $this->time;
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

    //Type
	public function getfilmsTypes(): FilmType {
		return $this->filmType;
	}
	
	public function setfilmsTypes(FilmType $filmTypes): self {
		$this->filmType = $filmTypes;
		return $this;
	}
}