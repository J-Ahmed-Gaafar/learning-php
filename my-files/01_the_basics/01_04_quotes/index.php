<?php
    $name = 'joe';
    echo "Hello, $name\n"; // Hello joe (goes through processor)
    echo "Hello, $name\n"; // Hello $name
    echo 'Hello, ' . $name . "!\n"; // Hello joe (faster than double quotes)
    echo "Welcome to Joe's Website.\n"; // Escape Characters (\' is the only recognised escape in single quotes)
    echo "Joe's Nickname in HS was \"Joey Calzone\""
?>

<!-- generally we will use single quotes unless there is a reason for double quotes,
like printing a variable or using some escape Characters. -->