

<?php
require "Employee.php";
include_once "controller.php";
$employees = [];
while( true ) {
    // Print the menu on console
    menuPrint();
    // Read user choice
    $choice = trim( fgets(STDIN) );
    // Exit application
    if( $choice === '6' ) {
        break;
    }
    // Act based on user choice
    switch( $choice ) {
        case 1:
        {
            readEmployee($employees);
            echo "\n Za povratak na glavni izbornik upisite bilo sto\n";
            if (strtolower(trim(fgets(STDIN))) !== 'da') {
                $bool = false;
            }
            break;
        }
        case 2:
        {
            echo "Upisite sve potrebne podatke: \n";
            $employees[] = createEmployee($employees);
            break;
        }
        case 3:
        {
            echo 'Upisite id korisnika kojeg zelite mjenjati';
            $id = readline();
            $employees[] = updateEployee($employees, $id);
            break;
        }
        case 4:
        {
            echo 'Upisite id korisnika kojeg zelite obrisati';
            $id = readline();
            $employees[] = deleteEmployee($employees, $id);
            break;
        }
        case 5:
        {
            echo "Statistika zaposlenika \n\n";
            echo "ukupna starost: ";
            sumyears($employees);
            echo "\n\n";

            echo "Prosjecna starost: ";
            averageyears($employees);
            echo "\n\n";

            echo "Ukupna primanja: ";
            totalincome($employees);
            echo "\n\n";

            echo "Razlika prosjecnih primanja izmedu zena i muskaraca: \n";
            incomediffmf($employees);
            echo "\n\n";
            echo "\n Za povratak na glavni izbornik upisite bilo sto\n";
            if (strtolower(trim(fgets(STDIN))) !== 'da') {
                $bool = false;
            }
            break;
        }
        default:
        {
            echo "\n\nKrivi unos, upisi ispravan broj\n\n";
        }
    }
}
function menuPrint()
{
    echo "//// Glavni izbornik\n";
    echo "1 - Pregled Zaposlenika\n";
    echo "2 - Unos novog Zaposlenika\n";
    echo "3 - Promjena podataka postojecem zaposleniku\n";
    echo "4 - Brisanje Zaposlenika\n";
    echo "5 - Statistika\n";
    echo "6 - Izlaz\n";
}
function createEmployee($employeeList = null)
{
    echo "ID: (int)";
    $id = idCheck(readline(),$employeeList);
    echo "Ime: (string)";
    $firstName = nameCheck(readline());
    echo "Prezime: (string)";
    $lastName = nameCheck(readline());
    echo "Datum rodenja (dd.mm.yyyy): ";
    $birthDay = dateCheck(readline());
    echo "Spol: (m/z)";
    $gender = genderCheck(readline());
    echo "Mjesecna primanja: (float)";
    $income = incomeCheck(readline());
    $age = floor((time() - strtotime($birthDay)) / (60*60*24*365));
    return new Employee($id, $firstName, $lastName, $birthDay, $gender, $income, $age);
}
function readEmployee($employeeList)
{
    echo "//// \n";
    foreach ($employeeList as $id => $value)
    {
        echo "ID: " . $value->getId() . "\n";
        echo "IME: " . $value->getFirstName(). "\n";
        echo "PREZIME: " . $value->getLastName()."\n";
        echo "DATUM RODENJA: " . $value->getBirthDay()."\n";
        echo "SPOL: " . $value->getGender()."\n";
        echo "MJESECNA PRIMANJA: " . $value->getIncome()."\n";
        //echo "Godine: " . $value->getAge()."\n";  Samo za test
        echo "//// \n";
    }
}
function updateEployee($employeeList, $employeeId)
{
    foreach ($employeeList as $id => $employee){
        if ($employee->getId()!== $employeeId){
            echo "krivi id";
        }else{
            echo "Koji podatak zelite promijeniti (1-6)?\n";
            echo "1. ID\n";
            echo "2. IME\n";
            echo "3. PREZIME\n";
            echo "4. DATUM RODENJA\n";
            echo "5. SPOL\n";
            echo "6. MJESECNA PRIMANJA\n";
            switch (readline())
            {
                case 1:
                {
                    echo 'Stara vrijednost id-a je :'. $employee->getId() . "\n";
                    echo 'Nova vrijednost je :'. "\n";
                    $employee->setId(idCheck(readline(),$employeeList));
                    break;
                }
                case 2:
                {
                    echo 'Stara vrijednost imena je :' . $employee->getFirstName() . "\n";
                    echo 'Nova vrijednost imena je :' . "\n";
                    $employee->setFirstName(nameCheck(readline()));
                    break;
                }
                case 3:
                {
                    echo 'Stara vrijednost prezimena je :' . $employee->getLastName() . "\n";
                    echo 'Nova vrijednost prezimena je :' . "\n";
                    $employee->setLastName(nameCheck(readline()));
                    break;
                }
                case 4:
                {
                    echo 'Stara vrijednost datuma rodenja je:' . $employee->getBirthDay() . "\n";
                    echo 'Nova vrijednost datuma rodenja je :';
                    $employee->setBirthDay(dateCheck(readline()));
                    break;
                }
                case 5:
                {
                    echo 'Stara vrijednost spola je:' . $employee->getGender() . "\n";
                    echo 'Nova vrijednost spola je :';
                    $employee->setGender(genderCheck(readline()));
                    break;
                }
                case 6:
                {
                    echo 'Stara vrijednost primanja je:' . $employee->getIncome() . "\n";
                    echo 'Nova vrijednost primanja je :';
                    $employee->setIncome(incomeCheck(readline()));
                    break;
                }
            }
        }
    }
}
function deleteEmployee($array, $value, $strict = TRUE)
{
    if(($key = array_search($value, $array, $strict)) !== FALSE) {
        unset($array[$key]);
    }
    return $array;
}
function sumyears($employeeList)
{
    $agesum = [];
    foreach ($employeeList as $id => $value)
    {
        $agesum[]=$value->getAge();
    }
    //print_r($agesum);
    echo $sumofage = array_sum($agesum)."\n";
}
function averageyears($employeeList)
{
    $agelist = [];
    foreach ($employeeList as $id => $value)
    {
        $agelist[]=$value->getAge();
    }
    //print_r($agesum);
    echo $average_of_foo = array_sum($agelist) / count($agelist)."\n";
}
function totalincome($employeeList)
{
    $moneysum= [];   // godine do 20
    $moneysum20 = [];   // godine od 21 do 30
    $moneysum30 = [];   // godine od 31 do 40
    $moneysum40 = [];   // godine od 41

    foreach ($employeeList as $id => $value)
    {
        $Employeeage= $value->getAge();
        if($Employeeage<21){
            $moneysum[]=$value->getIncome();
        }else if ($Employeeage>20 && $Employeeage <31){
            $moneysum20[]=$value->getIncome();
        }else if ($Employeeage>30 && $Employeeage <41){
            $moneysum30[]=$value->getIncome();
        }else if ($Employeeage>40){
            $moneysum40[]=$value->getIncome();
        }

    }
    //print_r($agesum);
    echo $income = "Ukupna primanja zaposlenika do 20god: ".array_sum($moneysum)."\n";
    echo $income = "Ukupna primanja zaposlenika od 20god do 30god: ".array_sum($moneysum20)."\n";
    echo $income = "Ukupna primanja zaposlenika od 30god do 40god: ".array_sum($moneysum30)."\n";
    echo $income = "Ukupna primanja zaposlenika starijih od 40: ".array_sum($moneysum40)."\n";
}
function incomediffmf($employeeList)
{
    $moneysumf = [];   // Prihodi zena
    $moneysumm = [];   // Prihodi muskaraca

    foreach ($employeeList as $id => $value) {
        $employeegender = $value->getGender();
        if ($employeegender === "z") {
            $moneysumf[] = $value->getIncome();
        } else {
            $moneysumm[] = $value->getIncome();
        }
    }
    //print_r($agesum);
    if (empty($moneysumf)) {
        echo "Prosjecna primanja zenskih zaposlenika: 0\n";
    } else {
        echo "Prosjecna primanja zenskih zaposlenika " . array_sum($moneysumf) / count($moneysumf) . "\n";

    }
    if (empty($moneysumm)) {
        echo "Prosjecna primanja muskih zaposlenika: 0\n";
    } else {
        echo "Prosjecna primanja muskih zaposlenika " . array_sum($moneysumm) / count($moneysumm) . "\n";
    }
}