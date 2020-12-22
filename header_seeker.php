<?php
  include "config.php";
  session_start();

  if(!isset($_SESSION["seeker"])){
    header("Location: {$hostname}/index_login_food_seeker.php");
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
                    <a href='header_seeker.php'>Home</a>
                </li>

                <li>
                    <a href="addfood_seeker.php">Apply for Food Seeker</a>
                </li>
                <li>
                    <a href="disp_overall_seek.php">overall Food Seekers</a>
                </li>
                 <li>
                    <a href="seek_owner_details.php">My Seeking Details</a>
                </li>
                <li>
                    <a href="disp_Applied_seek_food.php">Food Requested</a>
                </li>
                

                <!-- <li>
                    <a href="search_for_donor_place_city.php">Donator near me</a>
                </li> -->

                 <li>
                     <li>
                    <a href="logout_seeker.php">Logout</a>
                </li>
                </li>
            </ul>
        </div>
