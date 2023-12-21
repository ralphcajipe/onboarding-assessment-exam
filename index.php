<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onboarding Assessment Exam</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> <!-- Import PT Sans font -->
    <link rel="stylesheet" href="styles.css">
    <script src="alert.js"></script>
</head>

<body>
    <div class="container">
        <div class="left">
            <!-- Task 1: Create an HTML page with the following elements -->
            <h1>Onboarding Assessment Exam</h1>
            <p>This is a paragraph of my web page. You can see that I have <a href="https://google.com" target="_blank">A LINK</a> here which redirects you to the Google Search engine.</p>

            <?php
            // Task 2: Given the following array of values, output it as an unordered list (PHP):
            $words = array("the", "quick", "brown", "fox");

            echo "<ul>";
            foreach ($words as $word) {
                echo "<li>$word</li>";
            }
            echo "</ul>";
            ?>

            <h2>Calculate Values</h2>
            <form action="index.php" method="post" onsubmit="return validateInput()">
                <input type="text" id="numbers" name="numbers" placeholder="Enter numbers (e.g., 1, 2, 3)" required>
                <input type="submit" value="Calculate">
            </form>

            <?php
            // Task 3: Create a PHP function that accepts 3 numbers and outputs the following values:
            require 'calculate_values.php';
            require 'display_numbers.php';
            ?>
        </div>

        <div class="right">
            <button onclick="showAlert()">Click me</button>
        </div>
    </div>
</body>

</html>