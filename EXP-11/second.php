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
    echo "Before changing variable";
    
    echo "<br>" .$_SESSION['favsport'];
    echo "<br>".$_SESSION['favcar'];
    $_SESSION['favsport']='football';
    $_SESSION['favcar']='fortuner';
    echo "After changing the value";
    
    echo "<br>".$_SESSION['favsport'];
    echo "<br>".$_SESSION['favcar'];
    ?>
    <a href="third.php">End Session</a>
</form>
</body>
</html>