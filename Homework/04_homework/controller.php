<?php
function nameCheck($input)
{
    if($input==="" || !preg_match('/^[a-z][a-z\s]*$/', $input)){
        echo "Ime/prezime ne može biti prazno i sadržavati brojeve.\nUnesite novo ime/prezime:\n";
        return nameCheck(readline());
    }
    return $input;
}
function idCheck($input, $objectArray)
{
    if($input==="" || !preg_match('/^\d+$/', $input)){
        echo "Morate unijeti ID cjelobrojne vrijednosti.\nUnesite novi ID:\n";
        return idCheck(readline(),$objectArray);
    }
    foreach ($objectArray as $id => $value){
        if($value->getId() === $input){
            echo "Employee s istim ID-em već postoji.\nUnesite novi ID:\n";
            return idCheck(readline(),$objectArray);
        }
    }
    return $input;
}
function incomeCheck($input)
{
    $input = floatval(str_replace(",",".",$input));
    if($input==="" || !is_float($input) || $input<=0){
        echo "Mjesečno primanje mora biti decimalan broj veći od 0.\nUnesite novu vrijednost:\n";
        return incomeCheck(readline());
    }
    return number_format($input,2,'.','');
}
function dateCheck($input)
{
    $input = str_replace(["-","/","'\'"], ".",$input);
    $format = "d.m.Y";
    $d = DateTime::createFromFormat($format, $input);
    if($input==="" || preg_match("/^[a-zA-Z]+$/", $input) || $d->format($format)!==$input){
        echo "Morate upisati datum formata dd.mm.yyyy.\nUnesite novu vrijednost:\n";
        return dateCheck(readline());
    }
    return $input;
}
function genderCheck($input)
{
    if($input==="" || ($input !== "m" && $input !== "ž")){
        echo "Spol može biti muški ili ženski.\nUnesite 'm' ili 'ž':\n";
        return genderCheck(readline());
    }
    return $input;
}