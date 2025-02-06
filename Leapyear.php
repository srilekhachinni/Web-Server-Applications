<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Detection</title>
</head>
<body>
    <h2>Task 4: Detect Leap Year</h2>
    <form method="POST">
        <label>Enter a year:</label>
        <input type="number" name="year" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $year = $_POST['year'];
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "<p>$year is a <strong>Leap Year</strong>.</p>";
        } else {
            echo "<p>$year is <strong>not a Leap Year</strong>.</p>";
        }
    }
    ?>
</body>
</html>
