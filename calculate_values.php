<?php
// calculate_values.php
/**
 * The `calculateValues` function takes in an array of numbers and returns an array containing the sum,
 * average, minimum, and maximum values.
 * 
 * @return The function `calculateValues` returns an array with the following keys and corresponding
 * values:
 */

function calculateValues(...$numbers)
{
    if (empty($numbers)) {
        throw new InvalidArgumentException('No numbers provided!');
    }

    $sum = array_sum($numbers);
    $average = $sum / count($numbers);
    $min = min($numbers);
    $max = max($numbers);

    return array(
        "sum" => $sum,
        "average" => $average,
        "min" => $min,
        "max" => $max
    );
}
