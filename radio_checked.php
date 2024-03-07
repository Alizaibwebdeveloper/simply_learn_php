<!DOCTYPE html>
<html>
<head>
    <title>Radio Button Form</title>
</head>
<body>
    <form method="post" action="process_form.php">
    <label for="html">Add</label><br>
    <input type="radio" id="html" name="fav_language" value="Add" <?php if(isset($_POST['number1']) && $_POST['fav_languege'] &&$_POST['number2']); ?>><br>


    <label for="css">Sub</label><br>
    <input type="radio" id="css" name="fav_language" value="css" <?php if(isset($_POST['fav_language']) && $_POST['fav_language'] === 'css') echo 'checked'; ?>><br>

    <label for="javascript">Multiply</label><br>
    <input type="radio" id="javascript" name="fav_language" value="javascript" <?php if(isset($_POST['fav_language']) && $_POST['fav_language'] === 'javascript') echo 'checked'; ?>><br>

    <input type="number" name = "number1" value = "<?php
    if(isset($_POST['number1'])){
      $num1 = $_POST['number1'];

    }
    ?>>">
    <input type="number" name = "number2" value = "<?php
    if(isset($_POST['number2'])){
      $num2 = $_POST['number2'];

    }
    ?>">


    <!-- checked box -->

    <!-- <input type="checkbox" id="vehicle1" name="vehicle1" <?php if(isset($_POST['vehicle1'])) echo 'checked'; ?>><br>
    <label for="vehicle1">I have a bike</label><br>

    <input type="checkbox" id="vehicle2" name="vehicle2" <?php if(isset($_POST['vehicle2'])) echo 'checked'; ?>><br>
    <label for="vehicle2">I have a car</label><br>

    <input type="checkbox" id="vehicle3" name="vehicle3" <?php if(isset($_POST['vehicle3'])) echo 'checked'; ?>><br>
    <label for="vehicle3">I have a boat</label><br> -->




        
    </form>
    

</body>

</html>
