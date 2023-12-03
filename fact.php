<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="post">
        Enter a number:
        <input type="text" name="number" required>
        <button type="submit">Calculate Factorial</button>
    </form>

    <?php
    // Function to calculate the factorial of a number
    function calculateFactorial($number) {
        if ($number == 0 || $number == 1) {
            return 1;
        } else {
            return $number * calculateFactorial($number - 1);
        }
    }

    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumber = isset($_POST["number"]) ? intval($_POST["number"]) : 0;

        if ($inputNumber >= 0) {
            $factorial = calculateFactorial($inputNumber);
            echo "<p>The factorial of $inputNumber is $factorial.</p>";
        } else {
            echo "<p>Please enter a non-negative integer.</p>";
        }
    }
    ?>
</body>
</html>
