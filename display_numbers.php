<?php
// display_numbers.php
/* This processes input numbers and displays the results. It checks if the
request method is POST, retrieves the input numbers from the  superglobal variable, and
performs validation on the input numbers. */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = explode(',', $_POST['numbers']);
    $numbers = array_filter($numbers, function ($value) {
        return $value !== '';
    });

    try {
        // Validation
        if (empty($numbers) || implode('', $numbers) === '') {
            throw new InvalidArgumentException('Please enter valid numbers separated by commas.');
        }

        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                throw new InvalidArgumentException('Please enter valid numbers only.');
            }
        }

        if (count($numbers) < 2) {
            throw new InvalidArgumentException('Please provide at least two numbers.');
        }

        // Convert the numbers to float instead of integers
        $numbers = array_map('floatval', $numbers);

        echo "<p class='result-text'>Result</p>";

        // Display the input numbers
        echo "<p class='input-numbers'>Input numbers: " . implode(', ', $numbers) . "</p>";

        $result = calculateValues(...$numbers);

        echo "<table>";
        echo "<tr><th>Sum</th><td>{$result['sum']}</td></tr>";
        echo "<tr><th>Average</th><td>{$result['average']}</td></tr>";
        echo "<tr><th>Minimum</th><td>{$result['min']}</td></tr>";
        echo "<tr><th>Maximum</th><td>{$result['max']}</td></tr>";
        echo "</table>";
    } catch (InvalidArgumentException $e) {
        echo '<p class="error">Error: ' . $e->getMessage() . '</p>';
    }
}
