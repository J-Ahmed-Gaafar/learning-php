<?php
if (10 < 1) {
    echo '<p>We stopped at if</p>';
} else if (10 < 4) {
    echo '<p>We stopped at the first if else</p>';
} else if (10 < 11) {
    echo '<p>We stopped at the second if else</p>';
} else if (10 < 20) {
    echo '<p>We stopped at the 3rd if else</p>';
} else {
    echo '<p>None of the conditions are true, we never stopped, so this is the else</p>';
}

echo "out of the if";

$is_logged_in = 1;

if (1 == $is_logged_in) {
    echo '<h3>Welcome back, user!</h3>';
} else {
    echo '<h3>Welcome to the site!</h3>';
}
?>

<!-- Alternative Syntax for if -->
<?php if (1 == $is_logged_in): ?>

<header>
    <h1>Welcome to the home page of my website!</h1>
    <p>Have a look around.</p>
</header>

<?php endif; ?>

<!-- Yoda Conditionals

Good:
<\?php if ( 10 == $i ) {/* do something */}?>

Bad:
<\?php if ( $i == 10 ) {/* do something */}?> -->