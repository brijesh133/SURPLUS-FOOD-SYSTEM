<html>
   <head>
      <script type = "text/javascript">
         
            function Redirect() {
               window.location = "http://localhost:8080/SURPLUS%20FOOD%20SYSTEM/crud_html/seek_owner_details.php";
            }
        
      </script>
   </head>

<?php

 include "config.php";

session_start();
$donor_id=$_GET['no_d'];

$seeker_id=$_GET['req_id'];
$fod_id=$_GET['food_id'];
$sq="Select * from food_seeker";
$rt=mysqli_query($conn,$sq);
if(mysqli_num_rows($rt)>0){

 $conn=mysqli_connect("localhost","root","","surplus") or die("Connection failed");
   $sql="INSERT INTO food_dist VALUES ('{$fod_id}','{$donor_id}','{$seeker_id}')";
   $result=mysqli_query($conn,$sql);
    
  if($result==1){
     echo "<script>alert('Sucessfully requested');window.location='seek_owner_details.php';</script>";
  
  }
  else
  {
  	echo "<script>alert('You have already entered the details');window.location='seek_owner_details.php';</script>";
  }

// header("Location:http://localhost/SURPLUS%20FOOD%20SYSTEM/crud_html/index.php");
mysqli_close($conn);
}else{
         header("Location: {$hostname}/addfood_seeker.php");
	}
  ?>
</html>