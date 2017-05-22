<?php
$a = 1000;
switch ($a) {
    case 1;
        echo 'A';
        break;

    default;
        echo 'D';
       //沒有break!!
    case 10;
        echo 'B';
        break;


    case 100;
        echo 'C';
        break;


       // break;

}