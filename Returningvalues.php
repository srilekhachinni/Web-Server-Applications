<?php

// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}

// Function to calculate the perimeter of a rectangle
function calculatePerimeter($length, $width) {
    return 2 * ($length + $width);
}

// Example usage
$length = 10;
$width = 5;

// Calculate area and perimeter
$area = calculateArea($length, $width);
$perimeter = calculatePerimeter($length, $width);

// Display the results
echo "Area of the rectangle: " . $area . "\n";
echo "Perimeter of the rectangle: " . $perimeter . "\n";

?>
