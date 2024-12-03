<?php
// Indexed Array of 5 numbers
$numbers = [3, 7, 2, 10, 5];

// Associative Array with student names and grades
$students = [
    "Huzaifa" => 85,
    "Hamza" => 90,
    "Ayesha" => 78,
    "Ali" => 92,
    "Sara" => 88
];

// Loop through the indexed array
$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}
$average = $sum / count($numbers);

// Display sum and average of the numbers
echo "Indexed Array:\n";
echo "Numbers: " . implode(", ", $numbers) . "\n";
echo "Sum: $sum\n";
echo "Average: $average\n\n";

// Loop through the associative array
echo "Associative Array (Student Grades):\n";
foreach ($students as $name => $grade) {
    echo "Student: $name, Grade: $grade\n";
}
?>
