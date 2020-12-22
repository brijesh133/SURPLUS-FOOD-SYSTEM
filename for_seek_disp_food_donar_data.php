<?php
include 'header_seeker.php';
?>
<div id="main-content">
    <h2>Food Donar</h2>
    <?php 
    $place=$_POST['pl'];
    $req_id=$_GET['req_id'];
   $conn=mysqli_connect("localhost","root","","surplus") or die("Connection failed");
    $sql="Select * from food_donar where place= '{$place}'";
   $result=mysqli_query($conn,$sql) or die("query unsucessful");
   if(mysqli_num_rows($result)>0){

    ?>
    <table cellpadding="7px">
        <thead>
            <th>Food Id</th>

        <th>Id</th>
         
        <th>Name</th>
        <th>Email</th>
        <th>State</th>
        <th>Place</th>
        <th>Food_name</th>
        <th>Quantity</th>
        <th>Address</th>
        <th>Phone No</th>
        <th>Ask For Food</th>
        
        </thead>
        <tbody>
            
            <tr>
              <?php 
            while ($row =mysqli_fetch_assoc($result)) {
            ?>

            <td><?php echo $row['food_id']; ?></td>
                <td><?php echo $row['d_id']; ?></td>
                
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['place']; ?></td>
                <td><?php echo $row['food_name']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['ph']; ?></td>

                    

                 <td> <center><a href="Ask_Food.php?no_d=<?php echo $row['no_of_donated_food']; ?> & food_id=<?php echo $row['food_id']; ?> &  req_id=<?php echo $req_id ?>">Ask</a></center></td>
               
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } else{


echo "<h2>No record found</h2>";
}
mysqli_close($conn);
?>
</div>
</div>
</body>
</html>
