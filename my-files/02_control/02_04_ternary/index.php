<?php
    $is_logged_in = true;
    $name = null;

    // if ($is_logged_in) {
    //     $message = "Welcome back!";
    // } else {
    //     $message = "Hello There!"; // General Kenobi
    // }

    // $message = "Welcome" . ($is_logged_in? " back!": "!");
    // echo $message;

    // echo "Welcome" . ($is_logged_in? " back!": "!");

    // $name = isset($name)? $name: "Joe";
    // echo $name;

    // Elvis Operator
    $name = $name?: 'Joe';
    echo $name;
    