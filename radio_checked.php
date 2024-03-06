<!DOCTYPE html>
<html>
<head>
    <title>Radio Button Form</title>
</head>
<body>
    <form method="post" action="process_form.php">
    <label for="html">HTML</label><br>
    <input type="radio" id="html" name="fav_language" value="html" <?php if(isset($_POST['fav_language']) && $_POST['fav_language'] === 'html') echo 'checked'; ?>><br>


    <label for="css">CSS</label><br>
    <input type="radio" id="css" name="fav_language" value="css" <?php if(isset($_POST['fav_language']) && $_POST['fav_language'] === 'css') echo 'checked'; ?>><br>

    <label for="javascript">JavaScript</label><br>
    <input type="radio" id="javascript" name="fav_language" value="javascript" <?php if(isset($_POST['fav_language']) && $_POST['fav_language'] === 'javascript') echo 'checked'; ?>><br>


    <!-- checked box -->

    <input type="checkbox" id="vehicle1" name="vehicle1" <?php if(isset($_POST['vehicle1'])) echo 'checked'; ?>><br>
    <label for="vehicle1">I have a bike</label><br>

    <input type="checkbox" id="vehicle2" name="vehicle2" <?php if(isset($_POST['vehicle2'])) echo 'checked'; ?>><br>
    <label for="vehicle2">I have a car</label><br>

    <input type="checkbox" id="vehicle3" name="vehicle3" <?php if(isset($_POST['vehicle3'])) echo 'checked'; ?>><br>
    <label for="vehicle3">I have a boat</label><br>


        <input type="submit" value="Submit">
    </form>
    



</body>

</html>
