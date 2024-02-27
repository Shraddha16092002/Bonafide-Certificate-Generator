<?php //uncomment line 16,17 to delete record
 include("connect.php");
 $review1=$_GET['sign']; //fetching roll no

    
    $q3=mysqli_query($conn,"SELECT email FROM account WHERE rollno=$review1");
    $rows=mysqli_fetch_assoc($q3);
    $find2=$rows['email'];
   
   //  $receiver="shradhayeole2002@gmail.com";
     $sub="DIVS Bonafide Generator";
     $msg="your bonafide is rejected. Please reapply";
     $sender="From:DIVS";
     
     $status=mail($find2,$sub,$msg,$sender);
    $q4=mysqli_query($conn,"DELETE FROM doctable WHERE rollno=$review1");
    $q5=mysqli_query($conn,"DELETE FROM infotable WHERE roll=$review1");

     if($status)
     {
        header('location:xit.php');
        exit;
     }
     else{
         echo "no";
     }

 

    ?>
