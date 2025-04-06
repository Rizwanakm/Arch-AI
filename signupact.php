<?php
include("config.php");
if(isset($_POST['submit']))
{
$Name=$_POST['name'];
$Email=$_POST['email'];
$Password=$_POST['password'];


$sql="INSERT INTO signup(name,email,password)VALUES('$Name','$Email','$Password')";
if(mysqli_query($con,$sql))
{
    header("location:login.php");
}
else
{
    echo "error";
}
}

?>