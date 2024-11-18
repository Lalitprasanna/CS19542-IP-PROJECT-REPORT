<?php
// This is a single-line comment

/* 
 This is a multi-line comment
 */

// Declaring variables
$name = "John";
$age = 25;

// Outputting text and variables
echo "Hello, my name is " . $name . ". I am " . $age . " years old.";

// Conditional statement
if ($age >= 18) {
    echo " You are an adult.";
} else {
    echo " You are a minor.";
}

// Loop example
echo "<br>Counting from 1 to 5: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}

// Function example
function greet($person) {
    return "Hello, " . $person . "!";
}

echo "<br>" . greet($name);
?>
