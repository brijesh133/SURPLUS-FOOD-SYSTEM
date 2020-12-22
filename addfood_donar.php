<?php include 'header_donor.php'; 

?>
<div id="main-content">
    <h2>Donate Food</h2>

    <form class="post-form" action="savedonor.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="nm" />
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="em" />
        </div>


        <div class="form-group">
            <label>State</label>
            <input type="text" name="st" />
        </div>
        

         <div class="form-group">
            <label>Place</label>
            <input type="text" name="pl" />
        </div>

        <div class="form-group">
            <label>Food Name</label>
            <input type="text" name="fn" />
        </div>

        <div class="form-group">
            <label>Food Quantity</label>
            <select name="fd">
                <option value="" selected disabled>Select Class</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>


        <div class="form-group">
            <label>Address</label>
            <input type="te" name="ad" />
        </div>
        
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="ph" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
