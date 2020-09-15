<?php

// function dd($data) {
//     echo '<pre>';

//     die(var_dump($data));

//     echo '</pre>';
// }

function ageCheck($age) {
    if ( $age >= 21 ) {
        echo 'Welcome to the club! &#x263A;';
    } else {
        echo 'You are not old enough to enter the club. Maybe in a few years &#x2639;';
    }
}