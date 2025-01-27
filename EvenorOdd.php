<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even</title>
</head>
<body>
    <h2>Task 1: Check if a Number is Odd or Even</h2>
    <form method="POST">
        <label>Enter a number:</label>
        <input type="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];
        if ($number % 2 == 0) {
            echo "<p>$number is an <strong>Even</strong> number.</p>";
        } else {
            echo "<p>$number is an <strong>Odd</strong> number.</p>";
        }
    }
    ?>
</body>
</html>
