
<?php 
$review=$_GET['fruit'];

// Include the database configuration file  
require_once 'connect.php'; 
 
// Get image data from database 
$result = $conn->query("SELECT idcard FROM doctable where rollno=$review"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['idcard']); ?>" height="700" width="700"/> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>