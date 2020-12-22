
<?php

include "config.php";

session_start();

session_unset();

session_destroy();

header("Location: {$hostname}/index_login_food_seeker.php");

?>
