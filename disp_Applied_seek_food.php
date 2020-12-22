<?php
include 'header_seeker.php';

  $_SESSION["seeker_id"];
?>
<div id="main-content">
    <center><h2> Requested Food</h2></center>
    <?php 
   $conn=mysqli_connect("localhost","root","","surplus") or die("Connection failed");
   $sql="select fo.d_id,fo.name as fowner,fs.name as f_seek_name,fo.state as d_st,fs.state as s_st,fo.place as d_pl,fs.place as s_pl,food_name,fs.address as s_ad,fs.ph as s_ph FROM food_dist fd,food_donar fo,food_seeker fs WHERE fd.food_id=fo.food_id AND fo.no_of_donated_food=fd.no_of_donated_food AND fd.requested_food=fs.requested_food AND s_id='{$_SESSION["seeker_id"]}'";
   $result=mysqli_query($conn,$sql) or die("query unsucessful");
   if(mysqli_num_rows($result)>0){

    ?>
    <table cellpadding="7px">
        <thead>
        <th>Your Id</th>
        <th>Donar Name</th>
        <th>Seeker Name</th>
        <th>Donater State</th>
        <th>Seeker State</th>
        <th>Donater Place</th>
        <th>Seeker Place</th>
        <th>Food Name</th>
        <th>Seeker Address</th>
        <th>Seeker Phone No</th>
        </thead>
        <tbody>
            
            <tr>
              <?php 
            while ($row =mysqli_fetch_assoc($result)) {
            ?>
                <td><?php echo $row['d_id']; ?></td>
                <td><?php echo $row['fowner']; ?></td>
                <td><?php echo $row['f_seek_name']; ?></td>
                <td><?php echo $row['d_st']; ?></td>
                <td><?php echo $row['s_st']; ?></td>
                <td><?php echo $row['d_pl']; ?></td>
                <td><?php echo $row['s_pl']; ?></td>
                <td><?php echo $row['food_name']; ?></td>
                <td><?php echo $row['s_ad']; ?></td>
                <td><?php echo $row['s_ph']; ?></td>
                
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
