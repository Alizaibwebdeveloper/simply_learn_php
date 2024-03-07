<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number1" placeholder="Enter first number" required><br>
        <input type="number" name="number2" placeholder="Enter second number" required><br>

        <input type="radio" id="add" name="operation" value="add" required>
        <label for="add">Add</label><br>

        <input type="radio" id="sub" name="operation" value="sub">
        <label for="sub">Subtract</label><br>

        <input type="radio" id="multiply" name="operation" value="multiply">
        <label for="multiply">Multiply</label><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $operation = $_POST['operation'];

        if ($operation === 'add') {
            $result = $num1 + $num2;
            echo   " <h1>". "Result of addition: $result" ."</h1>";
        } elseif ($operation === 'sub') {
            $result = $num1 - $num2;
            echo   " <h1>". "Result of subtraction: $result" ."</h1>";
        } elseif ($operation === 'multiply') {
            $result = $num1 * $num2;
            echo   " <h1>". "Result of multiplication: $result" ."</h1>";
        } else {
            echo "Please select an operation.";
        }
    }
    ?>
</body>
</html>
