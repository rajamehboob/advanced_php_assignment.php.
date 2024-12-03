<?php
// Function to calculate the area of a square
function calculateSquareArea($side) {
    return $side * $side; // Area = side²
}

// Function to calculate the area of a rectangle
function calculateRectangleArea($length, $width) {
    return $length * $width; // Area = length * width
}

// Call the functions with arguments
$squareSide = 5;
$rectangleLength = 10;
$rectangleWidth = 4;

// Calculate areas
$squareArea = calculateSquareArea($squareSide);
$rectangleArea = calculateRectangleArea($rectangleLength, $rectangleWidth);

// Display the results
echo "The area of the square with side $squareSide is: $squareArea\n";
echo "The area of the rectangle with length $rectangleLength and width $rectangleWidth is: $rectangleArea\n";
?>
