<?php


class Person{


    //Attributs
    private string $name;
    private string $surname;
    private string $gender;
    private DateTime $dob;



    //Methods




    //Getters and setters

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
        return $this->dob;
    }

   public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }
}

?>