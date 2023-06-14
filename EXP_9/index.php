<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
</head>
<body>
 <?php
 $nameErr=$emailErr="";
 $name=$email="";
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
  if(empty($_POST["name"]))
  {
   $nameErr="please enter a valid name";
  }
  else{
    $name=test_input($_POST["name"]);
    if(!preg_match("/^[A-Za-z]*$/",$name)){
      $nameErr="Only letters and white spaces are allowed";
    }
  }
   $email=test_input($_POST["email"]); 
 }
 function test_input($data)
 {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
 }
 ?>
<form action="<?php echo htmlspecialchars($SERVER["PHP_SELF"]);?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputname" placeholder="Enter name" name="name">
    <span><?php echo $nameErr;?></span>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputRollno" name="email">
    
  </div>
  <input type="submit" value="submit" name="submit">
</form>

<?php
  echo $name;
  echo "<br>";
  echo $email;
?>
</body>
</html>