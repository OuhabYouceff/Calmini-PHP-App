<?php
class User
{
    private ?int $idUser = null;
    private ?string $lastName = null;
    private ?string $firstName = null;
    private ?string $email = null;
    private ?string $password = null;
    private ?DateTime $dob = null;
<<<<<<< HEAD
    private ?string $code=null;
    private ?string $picture=null;
    private ?string $Localisation=null;
    private ?string $Profession=null;
    function __construct($idUser = null, $lastName, $firstName, $email,$password, $dob, $code,$picture,$Profession,$Localisation)
=======

    function __construct($idUser = null, $lastName, $firstName, $email,$password, $dob)
>>>>>>> origin/abdelmonam
    {
        $this->idUser = $idUser;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->email = $email;
        $this->password= $password;
        $this->dob = $dob;
<<<<<<< HEAD
        $this->code = $code;
        $this->picture = $picture;
        $this->Profession = $Profession;
        $this->Localisation = $Localisation;
=======
>>>>>>> origin/abdelmonam
    }
    function getIdUser()
    {
        return $this->idUser;
    }
    function getLastName(){
        return $this->lastName;
    }
    function getFirstName(){
        return $this->firstName;
    }
    function getEmail(){
        return $this->email;
    }
    function getDob(){
        return $this->dob;
    }
    function getPassword(){
        return $this->password;
    }
<<<<<<< HEAD
    function getCode(){
        return $this->code;
    }
    function getpicture(){
        return $this->picture;
    }
    function getProfession(){
        return $this->Localisation;
    }
    function getLocalisation(){
        return $this->Profession;
    }
=======
>>>>>>> origin/abdelmonam
}
