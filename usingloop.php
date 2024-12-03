<?php
// Task 1: Create an array of 10 random numbers between 1 and 100
$randomNumbers = [];
for ($i = 0; $i < 10; $i++) {
    $randomNumbers[] = rand(1, 100); // Generate a random number and add it to the array
}

// Task 2: Count how many numbers are greater than 50
$countGreaterThan50 = 0;
foreach ($randomNumbers as $number) {
    if ($number > 50) {
        $countGreaterThan50++;
    }
}

// Display the array and the count of numbers greater than 50
echo "Random Numbers: " . implode(", ", $randomNumbers) . "\n";
echo "Count of numbers greater than 50: $countGreaterThan50\n\n";

// Task 3: Print a multiplication table for the number 5
echo "Multiplication Table for 5:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i) . "\n";
}
?>
