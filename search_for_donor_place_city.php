<?php
include 'header_seeker.php';
?>

<!DOCTYPE html>
<html>
<head>
    

      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Find_Near_Donor</title>
  <link rel="stylesheet" href="css/stylee.css">

</head>
<body>
  <?php 
   $conn=mysqli_connect("localhost","root","","surplus") or die("Connection failed");
   $sql="Select * from food_donar GROUP BY(place)";
   $result=mysqli_query($conn,$sql) or die("query unsucessful");
   $req_id=$_GET['req_id'];
   if(mysqli_num_rows($result)>0){

    ?>
<div id="main-content">
    <center><h2 style="margin-bottom: 50px;">Find Donar Near Me</h2></center>
    <form class="post-form" action="for_seek_disp_food_donar_data.php?req_id=<?php echo $req_id; ?>" method="post">

       

        <div class="form-group">
            <label>Place</label>
            <select name="pl">
                <option value="" selected disabled>Select Place</option>
                 <?php 
            while ($row =mysqli_fetch_assoc($result)) {
            ?>
                <option value="<?php echo $row['place']; ?>"><?php echo $row['place']; ?></option>

                <?php }?>
            </select>
        </div>
        
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>

<?php }else{


echo "<h2>No record found</h2>";
}
mysqli_close($conn);
?> 
</html>
