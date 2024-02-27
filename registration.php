<?php
session_start();

include("connect.php"); //creating coonection with database

//storing input field values from signup.html page in below variables
$name=$_POST['user'];
$pass=$_POST['password'];
$email=$_POST['email'];
$rollno=$_POST['rollno'];
$phone=$_POST['phone'];

$s="select * from account where username='$name'";
$result=mysqli_query($conn,$s); //mysqli_query is use to execute query on database
$num=mysqli_num_rows($result);  //mysqli_num_rows finds number of rows in database
if($num==1)         //condition to check if username already exists in db or not
{
    //if username already exists it will show alert message and will bring user to same page again
    echo '<script type="text/javascript">';
    echo 'alert("username already exists");';
    echo 'window.location.href="signup.html";';
    echo '</script>';
}
else{
    //inserting values into account database
    $query=mysqli_query($conn, "INSERT into account values('$name','$pass','$email','$rollno','$phone')");
    echo '<script type="text/javascript">';
    echo 'alert("Registered successfully");';

    echo 'window.location.href="login.html";'; //directing to login page after registration
    echo '</script>';
}
?>