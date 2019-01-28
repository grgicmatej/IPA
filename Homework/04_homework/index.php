<?php
while( true ) {
    printMenu();// Print the menu on console
    $choice = trim( fgets(STDIN) );// Izbor korisnika
    if( $choice == 0) {
        break;
    }
    switchMenu($choice);
}
//switchMenu($choice);
function switchMenu($x)
{
    switch($x) {
        case "1":
            {
                echo " TEST 1 ODABIR\n\n";
                /*
                 Tu ide logika pregleda zaposlenika
                */
                echo "\n\nZa povratak na glavni izbornik unesite 5";
                break;
            }
        case "2":
            {
                echo " TEST 2 ODABIR\n\n";
                /*
                 Tu ide logika Unos novog zaposlenika
                */
                echo "\n\nZa povratak na glavni izbornik unesite 5";
                break;
            }
        case "3":
            {
                echo " TEST 3 ODABIR\n\n";
                /*
                Tu ide logika promjena podataka na zaposleniku
                */
                echo "\n\nZa povratak na glavni izbornik unesite 5";
                break;
            }
        case "4":
            {
                echo " TEST 4 ODABIR\n\n";
                /*
                Tu ide logika brisanja podataka zaposlenika
                */
                echo "\n\nZa povratak na glavni izbornik unesite 5";
                break;
            }
        case "5":
            {
                printStats();
                $choiceStats = trim(fgets(STDIN));// Izbor korisnika
                switchStats($choiceStats);
            }
    }

}        // Tu su switchevi glavnog menija
function switchStats($x)
{
    switch ($x){
        case "1":
            {
                echo "\n\n TEST STATISTIKA 1 ODABIR\n\n";
                /*
                Tu ide logika statistike ukupne starosti zaposlenika
                */
                echo "\n\nZa povratak na glavni izbornik unesite 5";
                break;
            }
        case "2":
            {
                echo "\n\n TEST STATISTIKA 2 ODABIR\n\n";
                /*
                 Tu ide logika statistike  prosjecne starosti zaposlenika
                */
                echo "\n\nZa povratak na glavni izbornik unesite 5";
                break;
            }
        case "3":
            {
                echo "\n\n TEST STATISTIKA 3 ODABIR\n\n";
                /*
                 Tu ide logika statistike ukupnih primanja zaposlenika
                */
                echo "\n\nZa povratak na glavni izbornik unesite 5";
                break;
            }
        case "4":
            {
                echo "\n\n TEST STATISTIKA 4 ODABIR\n\n";
                /*
                 Tu ide logika statistike prosjecnih primanja zaposlenika
                */
                echo "\n\nZa povratak na glavni izbornik unesite 5";
                break;
            }
        case "5":
            {
                break;
            }
        /*default:
            {
                echo "\n\nNo(or)wrong choice is entered. Please provide a valid choice.\n\n";
            }*/
    }
}       // Tu su switchevi menija statistike
function printMenu()
{
    echo "\n---- GLAVNI IZBORNIK ----\n";
    echo "1 - Pregled zaposlenika\n";
    echo "2 - Unos novog zaposlenika\n";
    echo "3 - Promjena podataka postojecem zaposleniku\n";
    echo "4 - Brisanje zaposlenika\n";
    echo "5 - Statistika\n";
    echo "0 - Izlaz iz aplikacije\n";
    echo "---- GLAVNI IZBORNIK ----\n";
    echo "Unesi svoj izbor: ";
}          // Tu je ispis glavnog menija
function printStats()
{
    echo "\n---- IZBORNIK STATISTIKE ----\n";
    echo "1 - Ukupna starost zaposlenika\n";
    echo "2 - Prosjecna starost zaposlenika\n";
    echo "3 - Ukupna primanja zaposlenika\n";
    echo "4 - Prosjecna primanja zaposlenika\n";
    echo "5 - Povratak na glavni izbornik\n";
    echo "---- IZBORNIK STATISTIKE ----\n";
    echo "Unesi svoj izbor: ";
}        // TU je ispis menija statistike

// Putanja
// php C:\xampp\htdocs\IPA\Homework\04_homework\index.php

// klase

class Zaposlenik
{
    private $id;
    private $ime;
    private $prezime;
    private $datumRodenja;
    private $spol;
    private $primanja;
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    public function __set($property, $value)
    {
        if (isset($property)) {
            $this->$property = $value;
        }else{
            echo 'potrebno je unjeti sve podatke';
        }
        return $this;
    }
    public function __construct($id, $ime, $prezime, $datumRodenja, $spol, $primanja)
    {
        $this->id($id);
        $this->ime($ime);
        $this->prezime($prezime);
        $this->datumRodenja($datumRodenja);
        $this->spol($spol);
        $this->primanja($primanja);
    }
}

$zaposlenik = new zaposlenik();
$choiceMain = trim( fgets(STDIN) );
$zaposlenik->ime = $choiceMain;
$zaposlenik->prezime= $choiceMain;








/* DODAVANJE PODATAKA
$o=new Zaposlenik();
$o->setIme("Matej");
$o->setPrezime("Grgic");
var_dump($o);*/