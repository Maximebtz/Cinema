<?php

class film{

    //Attributs
    private string $title;
    private string $release;
    private int $time;
    private string $synopsis;
    private Director $director;


    //__construct
    public function __construct(string $title, string $release, int $time, string $synopsis, Director $director){

        $this->title = $title;
        $this->release = $release;
        $this->time = $time;
        $this->synopsis = $synopsis;
        $this->director = $director;
        
    }


    //Methods


    //Getters and setters 

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
}