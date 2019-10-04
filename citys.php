<!DOCTYPE html>
<html lang="en">


<meta charset="UTF-8">
<meta name="X-UA-Compatible" content="IE-chrome">
<meta name="viewport" content="width = device-width,initial-scale = 1 ">
<title>Ethiopian Hsitory </title>
<!--compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="include/index.css">
<!--Jquery library-->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Popper JS -->
<script type="text/javascript" src="popper.min.js"></script>
<!--compiled JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<body>
    <header>
        <?php require 'include/header.php';?>
    </header>
    <br><br>
    <br>
    </header>
    <div class="container">
 <div class="row">
 <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 " >
    <div class="card jam2">
    <h4 class="hedertext"> Addis Ababa</h4> 
    <img src= "midia_file/56.jpg"class="card-img-top" width="340" height="200" alt="bird eye view of Addis ababa city">
    <div>
        
    <?php

if (file_exists("text_files/addis_ababa.txt")){
$myData = file_get_contents("text_files/addis_ababa.txt");
}
 ?>
    </div>
    <p class="hedertext">
    <?php echo $myData;?>
    </p>
        
</div>
    </div>
    <div class="d-lg-none">
        .
</div>
 <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 " >
    <div class="card jam2">
    <h4 class="hedertext"> Gonder</h4> 
    <img src= "midia_file/gonder.jpg"class="card-img-top" width="340" height="200" alt="Fasilides' castle in Gonder">
    <p class="hedertext">
    <div>
    <?php

if (file_exists("text_files/gonder.txt")){
$myData = file_get_contents("text_files/gonder.txt");
}
 ?>
    </div>
    <p class="hedertext">
    <?php echo $myData;?>
    </p>
        
</div>
    </div>
    <div class="d-lg-none">

.

</div>
    <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
    <div class="card jam2">
    <h4 class="hedertext"> Hawassa</h4> 
    <img src= "midia_file/hawassa.png"class="card-img-top" width="340" height="200" alt="bird eye view of the beautiful hawasssa city ">
   <div>
   <?php

if (file_exists("text_files/hawassa.txt")){
$myData = file_get_contents("text_files/hawassa.txt");
}
 ?>
    </div>
    <p class="hedertext">
    <?php echo $myData;?>
    </p>
   </div>
     
</div>
    </div>
    </div>
    </div>
    <br/>
    <div class="container">
    <div class="row">
 <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
    <div class="card jam2">
    <h4 class="hedertext"> Lalibela</h4> 
    <img src= "midia_file/lalibela.jpg"class="card-img-top"  width="340" height="200" alt="the mezmerizing bete giyorgis in lalibel city">
    <div >
    <?php

if (file_exists("text_files/lalibela.txt")){
$myData = file_get_contents("text_files/lalibela.txt");
}
 ?>
    </div>
       <p class="hedertext">
           <?php echo $myData;?>
            </p>
        
</div>
    </div>
    <div class="d-lg-none">

.

</div>
 <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
    <div class="card jam2">
    <h4 class="hedertext"> Axum</h4> 
    <img src= "midia_file/axum.jpg"class="card-img-top" width="340" height="200" alt="centurys old obelisk in axum city ">
    <div>
    <?php

if (file_exists("text_files/axum.txt")){
$myData = file_get_contents("text_files/axum.txt");
}
 ?>
    </div>
    <p class="hedertext">
    <?php echo $myData;?>
    </p>
        
    </div>
</div>
<div class="d-lg-none">

.

</div>
     <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
    <div class="card jam2">
    <h4 class="hedertext">Harar</h4> 
    <img src= "midia_file/harar.jpg"class="card-img-top" width="340" height="200" alt="the main gate of harar city ">
    <div >
    <?php

if (file_exists("text_files/harar.txt")){
$myData = file_get_contents("text_files/harar.txt");
}
 ?>
    </div>
       <p class="hedertext">
           <?php echo $myData;?>
            </p>

</div>
</div>
  
    
<!--
    <div class="container">
 
    <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 " >
    <div class="card jam2">
    <h4 class="hedertext"> jima</h4> 
    <img src= ""class="card-img-top" alt="...">
    <p class="hedertext">
   
    </p>
        
</div>
    </div>
   
    <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 " >
    <div class="card jam2">
    <h4 class="hedertext">Arbaminch</h4> 
    <img src= ""class="card-img-top" alt="...">
    <p class="hedertext">
   
    </p>
        
</div>
    </div>
    ---->
    <div class="d-lg-none">
    <div class="container-fluid">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                <li class="page-item"><a class="page-link" href="biography.php">Previous</a></li>
                <li class="page-item " aria-current="page">
                    <a class="page-link" href="#">Top <span class="sr-only"></span></a>
                </li>
             
                <li class="page-item">
                    <a class="page-link" href="volunteer.php">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
    </div>
     <div>

    <div class="container-fluid">
    <br/>
<footer  class="d-lg-none">
<?php require 'include/footer.php'; ?>
</footer>
</div>
