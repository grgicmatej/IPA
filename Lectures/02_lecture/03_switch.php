<?php

$grade=$_GET['ocijena'];
switch ($grade) {
    case 1:
        echo 'nedovoljan';
        break;
    case 2:
        echo 'dovoljan';
        break;
    case 3:
        echo 'dobar';
        break;
    case 4:
        echo 'vrlo dobar';
        break;
    case 5:
        echo 'odličan';
        break;
        default:echo'nepoznato';
        breake;

}