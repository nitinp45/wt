<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myInfo";

$conn=mysqli_connect($servername,$username,$password,$dbname);

//check the connection
if(!$conn){
    echo"Not establish connection";
}
else{
    echo"establish connection";
}
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$class=$_POST['class'];
$sql="INSERT INTO `info`(`name`,`rollno',`class`) VALUES('$name','$rollno','$class'   )";

if(!mysqli_query($conn,$sql))
{
    echo "Data is not inserted";
}
else{
    echo "Data is inserted";
}


//retrive data from database 

$sql="SELECT `name`,`rollno',`class` FROM `info`";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo $row["name"]." ". $row["rollno"]." ". $row["class"];

    }
    else{
        echo "0 rows";
    }
}
