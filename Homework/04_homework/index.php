<?php
while( true ) {
    printMenu();// Print the menu on console
    $choice = trim( fgets(STDIN) );// Read user choice
    if( $choice == 6 ) {// Exit application
        break;
    }
}
function printMenu() {
    echo "---- GLAVNI IZBORNIK ----\n";
    echo "1 - Pregled zaposlenika\n";
    echo "2 - Unos novog zaposlenika\n";
    echo "3 - Promjena podataka postojecem zaposleniku\n";
    echo "4 - Brisanje zaposlenika\n";
    echo "5 - Statistika\n";
    echo "6 - Izlaz iz aplikacije\n";
    echo "---- GLAVNI IZBORNIK ----\n";
    echo "Unesi izbor od 1 do 6: ";
}

switch( $choice ) {
    case 1:
        {
            echo " TEST 1 ODABIR";
            break;
        }
    case 2:
        {
            echo " TEST 2 ODABIR";
            //Unos novog zaposlenika
            break;
        }
    case 3:
        {
            echo " TEST 3 ODABIR";
            //Promjena podataka na zaposleniku
            break;
        }
    case 4:
        {
            echo " TEST 4 ODABIR";
            //Brisanje zaposlenika
            break;
        }
    case 5:
        {
            printStats();
            $choiceStats = trim( fgets(STDIN) );// Read user choice
            break;
        }
    default:
        {
            echo "\n\nNo choice is entered. Please provide a valid choice.\n\n";
        }
}
function printStats()  {
    echo "---- IZBORNIK STATISTIKE ----\n";
    echo "1 - Ukupna starost zaposlenika\n";
    echo "2 - Prosjecna starost zaposlenika\n";
    echo "3 - Ukupna primanja zaposlenika\n";
    echo "4 - Prosjecna primanja zaposlenika\n";
    echo "5 - Povratak na glavni izbornik\n";
    echo "6 - Izlaz iz aplikacije\n";
    echo "---- IZBORNIK STATISTIKE ----\n";
    echo "Unesi izbor od 1 do 6: ";
}
//php C:\xampp\htdocs\IPA\Homework\04_homework\index.php