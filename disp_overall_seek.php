<?php
include 'header_seeker.php';
?>
<div id="main-content">
    <h2>Food Seekers</h2>
    <?php 
   $conn=mysqli_connect("localhost","root","","surplus") or die("Connection failed");
   $sql="Select * from food_seeker";
   $result=mysqli_query($conn,$sql) or die("query unsucessful");
   if(mysqli_num_rows($result)>0){

    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>State</th>
        <th>Place</th>
        <th>Address</th>
        <th>Phone No</th>
        </thead>
        <tbody>
            
            <tr>
              <?php 
            while ($row =mysqli_fetch_assoc($result)) {
            ?>
                <td><?php echo $row['s_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['place']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['ph']; ?></td>
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
