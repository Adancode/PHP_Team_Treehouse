<?php
$name = 'Adam';
$string_one = "One: Learning to display \"Hello $name\" to the screen.\n";  // double quotes allow for displaying variable values, as opposed to the literal variable name.
// $string_two = 'Two: Learning to display \"Hello $name\" to the screen.' . "\n";  // single quotes are literal, only use \' for an apostrophe, that's it.
//echo $string_one;
// echo $string_two;
// $string_three = 'Three: Learning to display "Hello ' . $name . '" to the screen.' . "\n";  // the . in PHP is like the + sign in JavaScript in this case.
// .= is the same as += in JavaScript
// echo $string_three;
//
// $isReady = true;
// $isReady = false;

// var_dump($isReady);
// echo $isReady;
if ($string_one === $string_one + 6) {
     var_dump("The values are identical");
} else {
     echo "the values DO NOT match";
}

 ?>
