<?php
  include "config.php";
  session_start();

  if(!isset($_SESSION["seeker"])){
    header("Location: {$hostname}/addfood_seeker.php");
  }
?>

<?php

  $id=$_SESSION["seeker_id"];
  
 $name=$_POST['nm'];

 $email=$_POST['em'];

 $state=$_POST['st'];

 $place=$_POST['pl'];

 $food_name=$_POST['fn'];

 $quant=$_POST['fd'];


 $adres=$_POST['ad'];

 $ph=$_POST['ph'];

 $conn=mysqli_connect("localhost","root","","surplus") or die("Connection failed");
   $sql="INSERT INTO food_seeker(s_id,name,email,state,place,address,ph) VALUES ('{$id}','{$name}','{$email}','{$state}','{$place}','{$adres}','{$ph}')";
   $result=mysqli_query($conn,$sql) or die("query unsucessful");

  if($result==1){

  	echo "<script>alert('Sucessfully inserted');window.location='addfood_seeker.php';</script>";
  }
  else
  {
  	echo "<script>alert('Failed to Insert ');window.location='addfood_seeker.php';</script>";
  }


mysqli_close($conn);
  ?>
