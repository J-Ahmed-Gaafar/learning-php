<?php 
$name= "Teresa"; // Heading 1
$city = "NYC";
$movie = "Star Wars"; //Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";
?>

<h1>Hello <?php echo $name; ?>!</h1>
<?php
// echo "<h1>Hello, $name!</h1>\n\n";

echo "<p>so glad you can join us in $city toda! You will be <b>$friend</b>'s guide as you do a range of activities.</p>\n\n";

echo "<p>You will end your day by seeing <i>$movie</i> at 7:00pm. Make sure to bring the money you've been provided. The movie ticket is \$12. $friend's favourite candy is $candy, so grab some of those too.</p>\n\n";

echo "<p>...and of-course, \"May the Force be with you!\"</p>";