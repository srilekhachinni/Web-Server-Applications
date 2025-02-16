<?php

// Loop through numbers 1 to 20
for ($i = 1; $i <= 20; $i++) {
    // Check if the number is divisible by both 3 and 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    }
    // Check if the number is divisible by 3
    elseif ($i % 3 == 0) {
        echo "Fizz\n";
    }
    // Check if the number is divisible by 5
    elseif ($i % 5 == 0) {
        echo "Buzz\n";
    }
    // Otherwise, print the number
    else {
        echo $i . "\n";
    }
}

?>
