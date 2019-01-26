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

switch( $choice ) {
    case 1:
        {
            // Tu ide popis zaposlenika

            break;
        }
    case 2:
        {
            break;
        }
    case 3:
        {
            break;
        }
    case 4:
        {
            break;
        }
    default:
        {
            echo "\n\nNo choice is entered. Please provide a valid choice.\n\n";
        }
}
}