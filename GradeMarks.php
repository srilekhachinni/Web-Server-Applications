<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Classification</title>
</head>
<body>
    <h2>Task 3: Classify Grades Based on Marks</h2>
    <form method="POST">
        <label>Enter marks (0-100):</label>
        <input type="number" name="marks" min="0" max="100" required>
        <button type="submit">Check Grade</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $marks = $_POST['marks'];
        if ($marks >= 90) {
            echo "<p>Grade: <strong>A</strong></p>";
        } elseif ($marks >= 80) {
            echo "<p>Grade: <strong>B</strong></p>";
        } elseif ($marks >= 70) {
            echo "<p>Grade: <strong>C</strong></p>";
        } elseif ($marks >= 60) {
            echo "<p>Grade: <strong>D</strong></p>";
        } else {
            echo "<p>Grade: <strong>F</strong></p>";
        }
    }
    ?>
</body>
</html>
