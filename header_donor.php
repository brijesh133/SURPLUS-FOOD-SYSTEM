<?php
  include "config.php";
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/index_login_food_donor.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SURPLUSS FOOD SYSTEM</title>
  <link rel="stylesheet" href="css/stylee.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>SURPLUSS FOOD SYSTEM</h1>
        </div>
        <div id="menu">
            <ul>
              <li>
                    <a href='header_donor.php'>Home</a>
                </li>
                <li>
                    <a href='addfood_donar.php'>Donate Food</a>
                </li>

                 <li>
                    <a href="donate_details.php">My Donate Details</a>
                </li>
                <li>
                    <a href="Applied_food.php">Food Requested</a>
                </li>


                <li>
                    <a href="disp_food_donar_data.php">Food Donater details</a>
                </li>

                <li>
                    <a href="seeker_disp.php">Food Seeker details</a>
                </li>

    


                
                
                 <li>
                     <li>
                    <a href="logout.php">Logout</a>
                </li>
                </li>
            </ul>
        </div>
