<?php

class Account{

private $con;
private $errorArray = array();

public function __construct($con){
$this->con = $con;

}

public function register($fn, $ln, $un, $em, $em2, $pw, $pw2)
{
$this->validateFirstName($fn);
$this->validateLastName($ln);
}

private function validateFirstName($fn)
{
    if(strlen($fn)<2 || strlen($fn)>25)
    {
array_push($this->errorArray, Constants::$firstNameCharacters);

    }
}
private function validateLastName($ln)
{
    if(strlen($ln)<2 || strlen($ln)>25)
    {
array_push($this->errorArray, Constants::$lastNameCharacters);

    }
}
private function validateUsername($un)
{
    if(strlen($un)<2 || strlen($un)>25)
    {
array_push($this->errorArray, Constants::$usernameCharacters);

    }
}
public function getError($error)
{
    if (in_array($error, $this->errorArray))
    {
        return $error;
    }
}
}
?>