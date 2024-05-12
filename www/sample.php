<?php

function isPrime($num) {
  // Handle edge cases (1 and 0)
  if ($num <= 1) {
    return false;
  }

  // Loop through potential divisors (up to the square root of the number)
  for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i === 0) {
      return false;
    }
  }

  // If no divisors found, the number is prime
  return true;
}

// Loop through numbers from 2 to 100
for ($i = 2; $i <= 100; $i++) {
  if (isPrime($i)) {
    echo $i . " ";
  }
}

?>
