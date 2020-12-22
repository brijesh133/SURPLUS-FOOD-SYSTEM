<!DOCTYPE html>
<html>
<head>
    

      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register_Donor</title>
  <link rel="stylesheet" href="css/stylee.css">


</head>
<body>
<div id="main-content">
     <center><h2 style="margin-bottom: 50px;">Food Donor Registeration</h2></center>
   
    <form class="post-form" action="save_reg_donar.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="nm" />
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="us" />
        </div>


        <div class="form-group">
            <label>Password</label>
            <input type="Password" name="pa" />
        </div>
        

         <div class="form-group">
            <label>email</label>
            <input type="email" name="em" />
        </div>

        
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
