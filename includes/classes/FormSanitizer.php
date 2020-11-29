<?php

class FormSanitizer{

public static function sanitizeFormString($inputText)
{
    $inputText= strip_tags($inputText);    //function to remove html and php tags
    $inputText= str_replace(" ", " ", $inputText); //Replace all occurrences of the search string with the replacement string
    $inputText = strtolower($inputText);
    $inputText=ucfirst($inputText);
    return $inputText;
}
public static function sanitizeFormUsername($inputText)
{
    $inputText= strip_tags($inputText);    //function to remove html and php tags
    $inputText= str_replace(" ", " ", $inputText); //Replace all occurrences of the search string with the replacement string
    return $inputText;
}
public static function sanitizeFormPassword($inputText)
{
    $inputText= strip_tags($inputText);    //function to remove html and php tags
    return $inputText;
}
public static function sanitizeFormEmail($inputText)
{
    $inputText= strip_tags($inputText);    //function to remove html and php tags
    $inputText= str_replace(" ", " ", $inputText); //Replace all occurrences of the search string with the replacement string
    return $inputText;
}

}




?>