<?php
function nameCheck($input)
{
    if($input==="" || !preg_match('/^[a-z][a-z\s]*$/', $input)){
        echo "Ime/prezime ne moze biti prazno i/ili sadrzavati brojeve.\nUnesite novo ime/prezime:\n";
        return nameCheck(readline());
    }
    return $input;
}
function idCheck($input, $objectArray)
{
    if($input==="" || !preg_match('/^\d+$/', $input)){
        echo "ID je cijeli broj\nUnesite novi ID:\n";
        return idCheck(readline(),$objectArray);
    }
    foreach ($objectArray as $id => $value){
        if($value->getId() === $input){
            echo "ID vec postoji\nUnesite novi ID:\n";
            return idCheck(readline(),$objectArray);
        }
    }
    return $input;
}
function incomeCheck($input)
{
    $input = floatval(str_replace(",",".",$input));
    if($input==="" || !is_float($input) || $input<=0){
        echo "Mjesecno primanje mora biti decimalan broj veci od 0.\nUnesite novu vrijednost:\n";
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
    if($input !== "m" && $input !== "z"){
        echo "Spol moze biti muski ili zenski.\nUnesite 'm' ili 'z':\n";
        return genderCheck(readline());
    }
    return $input;
}