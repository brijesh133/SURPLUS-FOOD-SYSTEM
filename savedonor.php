<?php
  include "config.php";
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/index_login_food_donor.php");
  }
?>

<?php
   
  $id=$_SESSION["user_id"];
  
 $name=$_POST['nm'];

 $email=$_POST['em'];

 $state=$_POST['st'];

 $place=$_POST['pl'];

 $food_name=$_POST['fn'];

 $quant=$_POST['fd'];


 $adres=$_POST['ad'];

 $ph=$_POST['ph'];

 $conn=mysqli_connect("localhost","root","","surplus") or die("Connection failed");
   $sql="INSERT INTO food_donar(d_id,name,email,state,place,food_name,quantity,address,ph) VALUES ('{$id}','{$name}','{$email}','{$state}','{$place}','{$food_name}','{$quant}','{$adres}','{$ph}')";
   $result=mysqli_query($conn,$sql) or die("query unsucessful");


   $sl="update food_donar set no_of_donated_food=food_id ";
   $reslt=mysqli_query($conn,$sl) or die("query unsucessful");
  if($result==1){

  	echo "<script>alert('Sucessfully inserted');window.location='addfood_donar.php';</script>";
    
  }
  else
  {
  	echo "<script>alert('Failed to Add Donator');window.location='addfood_donar.php';</script>";
  }

// header("Location:http://localhost/SURPLUS%20FOOD%20SYSTEM/crud_html/index.php");
mysqli_close($conn);

  ?>
