<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="number" name= number1 value="<?php 
    if(isset($_POST['number1'])){
     $num1 = $_POST['number1'];
     echo $num1;
    
    }
    ?>">
    <input type="number" name= number2 value="<?php 
    if(isset($_POST['number2'])){
     $num2 = $_POST['number2'];
     echo $num2;
    
    }
    ?>">
    <input type="submit" value="submit">
    </form>

    <?php
    $multiply = $num1 - $num2;

    echo "subtraction of two number is :" . $multiply;
?>
</body>
</html>