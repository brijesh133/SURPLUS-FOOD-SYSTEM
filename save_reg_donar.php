<?php

 include "config.php";


$name=$_POST['nm'];

 $email=$_POST['em'];

 $user=$_POST['us'];

 $pass=$_POST['pa'];



 $conn=mysqli_connect("localhost","root","","surplus") or die("Connection failed");
   $sql="INSERT INTO food_donor_user(Name,email,username,password) VALUES ('{$name}','{$email}','{$user}','{$pass}')";
   $result=mysqli_query($conn,$sql) or die("query unsucessful");

  if($result==1){

  	header("Location: {$hostname}/index_login_food_donor.php");
  }
  else
  {
  	echo "<h2>unsuccess</h2>";
  }

// header("Location:http://localhost/SURPLUS%20FOOD%20SYSTEM/crud_html/index.php");
mysqli_close($conn);
  ?>
