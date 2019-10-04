<!DOCTYPE html>
<html lang="en">


    <meta charset="UTF-8">
    <meta name="X-UA-Compatible" content="IE-chrome">
    <meta name="viewport" content="width = device-width,initial-scale = 1 ">
    <title>Ethiopian Hsitory </title>
   <!--compiled and minified CSS -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!---index css stylesheet for backgrawnd-image and text style--->
   <link rel="stylesheet" type="text/css" href="include/index.css">
  
   <!--Jquery library-->
   <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
   <!-- Popper JS -->
   <script type="text/javascript" src="popper.min.js"></script>
   <!--compiled JavaScript -->
   <script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>
<?php 
$firstname = $_POST['firstname']; 
$lastname =$_POST['lastname']; 
$username =  $_POST['username']; 
$country = $_POST['country']; 
$city =  $_POST['city']; 
$phone = $_POST['phone']; 
if (!empty($firstname) || !empty($lastname) || !empty($username) || !empty($country) || !empty($city) || !empty($phone)) { 
 $host = "localhost"; 
   $dbUsername = "root"; 
    $dbPassword = "123456"; 
    $dbname = "Registration"; 
    //create connection 
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname); 
    if (mysqli_connect_error()) { 
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error()); 
   } else { 
     $SELECT = "SELECT userName From education_registration WHERE userName = ? Limit 1"; //check from database
   $INSERT = "INSERT INTO education_registration (firstName, lastName, userName, country, city, phone) 
   values(?, ?, ?, ?, ?, ?)";
   //Prepare statement 
   $stmt = $conn->prepare($SELECT); 
   $stmt->bind_param("s", $username); 
 $stmt->execute(); 
     $stmt->bind_result($username); 
     $stmt->store_result(); 
     $rnum = $stmt->num_rows; 
     if ($rnum==0) { 
      $stmt->close(); 
            $stmt = $conn->prepare($INSERT); //insert into database
      $stmt->bind_param("ssssss", $firstname, $lastname, $username, $country, $city, $phone); 
      $stmt->execute(); 
      ?><?php
      require "include/registration.php";
     ?>
<div class="text-center jam">
<h1 class="text-center"> You Secsesfully Registerd for Volentery Service </h1>
<h1> 
<?php echo date("l jS \of F Y ") . " "."$logo " . "<br>";?></h1>
<a class="navbar-brand" href="#"><span id="topcard"  class="badge badge-success input-group-lg">ETHISTORY</span></a>
<h2>Thank You!!</h2>
<h1><?php  echo "$firstname"."  " ."$lastname"; ?></h1>
</div>
<?php require "include/footer.php";?>
     <?php
    } else { 
   require "include/registration.php";?>
     <div class="text-center jam">
       <h1 class="text-center"> Other user allready register using this email. </h1>
     <a class="navbar-brand" href="#"><span id="topcard"  class="badge badge-success input-group-lg">ETHISTORY</span></a>
     <h2 class="text-center">Pleace Provide Different Email.</h2>
     <h1><?php echo "$firstname"."  " ."$lastname"; ?><h1>
    </div>
   
    <?php require "include/footer.php";?>
     <?php
    } 
     $stmt->close(); 
    $conn->close(); 
    } 
} else { 
     echo "All field are required"; 
 die(); 
} 
?> 
