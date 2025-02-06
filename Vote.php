<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote Eligibility</title>
</head>
<body>
    <h2>Task 2: Check if a Person is Eligible to Vote</h2>
    <form method="POST">
        <label>Enter your age:</label>
        <input type="number" name="age" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $age = $_POST['age'];
        if ($age >= 18) {
            echo "<p>You are <strong>eligible</strong> to vote.</p>";
        } else {
            echo "<p>You are <strong>not eligible</strong> to vote. You must be at least 18 years old.</p>";
        }
    }
    ?>
</body>
</html>
