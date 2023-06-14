<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
    $_SESSION['favsport']='cricket';
    $_SESSION['favcar']='Harrier';
    ?>
    <a href="second.php">click</a>
</form>
</body>
</html>