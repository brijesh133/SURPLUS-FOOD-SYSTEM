<?php include 'header_seeker.php'; ?>
<div id="main-content">
    <h2> Food Seeker</h2>
    <form class="post-form" action="save_seeker.php" method="post">
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
