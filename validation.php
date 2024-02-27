<?php
session_start();

include("connect.php");//creating coonection with database

//storing input field values from login.html page in below variables
$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from account where username='$name' && password='$pass'"; //to check if login details are present in db or not
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1) //if login data is present then below code
{
    header('location:user_home.html');
    exit;
}
else{
    //if username already exists it will show alert message and will bring user to same page again

    echo '<script type="text/javascript">';
    echo 'alert("login failed !");';
    echo 'window.location.href="login.html";';
    echo '</script>';
    exit;

}


?>