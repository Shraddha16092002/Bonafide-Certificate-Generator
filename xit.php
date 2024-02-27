<?php
include_once('connect.php'); //connecting program with database
$query1="select * from doctable";  //writing query
$result=mysqli_query($conn,$query1); // connecting query and database
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Database</title>
    <style>
        body{
            background-image: url("https://www.teahub.io/photos/full/290-2904393_blue-lines-4k-material-design-creative-geometric-high.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        table{
            margin-top: 100px;
            margin-bottom: 100px;
            margin-left: 80px;
            margin-right: 80px;
            width: 1100px;
            border-collapse: collapse;
            border-style: hidden;
            box-shadow: 5px 10px 28px 20px ;
        }
        .make{
            text-decoration:none;
        }
        th{
            height: 40px;
            width: 50px;
            text-align: center;
            font-size: 20px;

        }
        tr:nth-child(even){
            background-color: white;
        } 
        tr:nth-child(odd){
            background-color: rgb(224, 224, 224);
        }
        td {
            height: 40px;
            width: 50px;
            text-align: center;
            font-size: large;
        }
        .approve{
            background-color: rgb(37, 139, 223); 
            color: white;
            height: 30px;
            width: 80px;
            border: none;
            margin-left:80px;
        }
        .reject{
            background-color: rgb(255, 45, 45); 
            color: white;
            height: 30px;
            width: 80px;
            border: none;
            
        }
        .hold{
            color:white;
            text-decoration:none;
        }
    </style>
</head>

<body>
    <center>
    <form  method="POST" action="Bonafide.php">
    <table>

        <tr   class="tr1" style="background-color: #337ab7; color: white;">
 
            <th >Roll No</th>
            <th>ID Card</th>
            <th>Transaction id</th>
            <th colspan="2" >Status</th>
            
        </tr>
        <?php
        //$result:- all data from doctable 
        while($rows=mysqli_fetch_assoc($result))  //fetches data as associative array 
        {
            
        ?>
        <tr class="tr2">
            <td>
                <?php echo $rows['rollno']; //display rollno by fetching it from doctable table
                $rolli=$rows['rollno']; //storing rollno in rolli variable
                ?>
            </td>

            <td>
               <!-- view link redirecting to view.php by passing rolli value in fruit variable -->
            <a href="view.php?fruit=<?php echo $rolli; ?>">view</a> 
            </td>

            <td>
            <?php echo $rows['sbi'];  
            
                ?>
            </td>

            <!-- rolli value will be passed to bonafide.php on clicking approve -->
            <td style="width:15%"><button class="approve" type="submit" name="approve" value="<?php echo $rolli; ?>" onclick="return confirm('Do you want to approve bonafide certificate to Roll no <?php echo $rolli; ?>')" >Approve</button></td>
            <!-- rolli value will be passed to reject.php on clicking reject -->
            <td style="width:15%"><button class="reject"><a href="reject.php?sign=<?php echo $rolli; ?>" class="hold">Reject</a></button></td>

        </tr>
       
        <?php
        }
        ?>
    </table>
    </form>
    </center>
    
</body>


</html>
