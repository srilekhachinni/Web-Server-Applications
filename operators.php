<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematical Operations</title>
</head>
<body>

<h1>Mathematical Operations</h1>

<?php
// Initialize variables
$firstNumber = $secondNumber = $operation = $result = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get user inputs
    $firstNumber = $_POST["first_number"];
    $secondNumber = $_POST["second_number"];
    $operation = $_POST["operation"];

    // Validate inputs

    if (!is_numeric($firstNumber) || !is_numeric($secondNumber)) {
        $error = "Please enter valid numbers.";
    } elseif ($operation === "division" && $secondNumber == 0) {
        $error = "Division by zero is not allowed.";
    } else {
        // Perform the selected operation

        switch ($operation) {
            case "addition":
                $result = $firstNumber + $secondNumber;
                break;
            case "subtraction":
                $result = $firstNumber - $secondNumber;
                break;
            case "multiplication":
                $result = $firstNumber * $secondNumber;
                break;
            case "division":
                $result = $firstNumber / $secondNumber;
                break;
        }
    }
}
?>

<!-- Form to accept user inputs -->

<form method="POST" action="">
    <label for="first_number">Enter first number:</label><br>
    <input type="text" id="first_number" name="first_number" value="<?php echo htmlspecialchars($firstNumber); ?>"><br>

    <label for="second_number">Enter second number:</label><br>
    <input type="text" id="second_number" name="second_number" value="<?php echo htmlspecialchars($secondNumber); ?>"><br>

    <label for="operation">Select operation:</label><br>
    <select id="operation" name="operation">
        <option value="addition" <?php if ($operation === "addition") echo "selected"; ?>>Addition (+)</option>
        <option value="subtraction" <?php if ($operation === "subtraction") echo "selected"; ?>>Subtraction (-)</option>
        <option value="multiplication" <?php if ($operation === "multiplication") echo "selected"; ?>>Multiplication (*)</option>
        <option value="division" <?php if ($operation === "division") echo "selected"; ?>>Division (/)</option>
    </select><br><br>

    <button type="submit">Submit</button>
</form>

<!-- Display error or result -->
 
<?php
if ($error) {
    echo "<p class='error'>$error</p>";
} elseif ($result !== "") {
    $symbol = "";
    switch ($operation) {
        case "addition": $symbol = "+"; break;
        case "subtraction": $symbol = "-"; break;
        case "multiplication": $symbol = "*"; break;
        case "division": $symbol = "/"; break;
    }
    echo "<p>Result: $firstNumber $symbol $secondNumber = $result</p>";
}
?>

</body>
</html>
