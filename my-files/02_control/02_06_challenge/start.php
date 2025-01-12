<?php
    $min = 1;
    $max = 50;
    $guess = 4; //Change this value to test!
    //$num = 16; // Change this value to test!

    // If you really want to go nuts, try this:
    $num = rand($min, $max);

    $message = 'Guess a number between ' . $min . ' and ' . $max;

    $message = match (true) {
        $guess == $num => '<p>Bingo!</p>',
        $guess > $num => '<p>Too high! Guess Again.</p>',
        $guess < $num => '<p>Too low! Guess Again.</p>',
        default => '<p>Out of range!</p>',
    };

    echo $message;
