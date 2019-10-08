<!DOCTYPE html>
<html lang="en">


    <meta charset="UTF-8">
    <meta name="X-UA-Compatible" content="IE-chrome">
    <meta name="viewport" content="width = device-width,initial-scale = 1 ">
    <title>Modern Ethiopia</title>
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
      <br>
      <br>
      <br>
      <br>
      <br>
        <main>    <div class="container">
<div class="row">
<div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
<img src= "https://upload.wikimedia.org/wikipedia/commons/f/f4/T%C3%A9wodros_II_-_2.jpg"  class="rounded-circle" width="300" height="300"  alt="bird eye view of Addis ababa city">  
<div class="card jam2">
    <p class="article-text">
    
    <?php

if (file_exists("text_files/dropdown/tewodr.txt")){
$myData = file_get_contents("text_files/dropdown/tewodr.txt");
}
?>
     <?php echo $myData;?>
    </p>       
     <a class="btn btn-link text-white" data-toggle="collapse" href="#tewodros" role="button" aria-expanded="false" aria-controls="collapseExample">
Continue Reading   &#128315; 
       
</a>
<div class="collapse " id="tewodros">
  <div class="card card-body jam2">
      <p class="article-text">
      <?php

if (file_exists("text_files/dropdown/tewodr2.txt")){
$myData = file_get_contents("text_files/dropdown/tewodr2.txt");
}
?>
     <?php echo $myData;?>
  </p>
</div>
</div>
    </p>
</div>
</div>
<div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">   
<img src= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWiX_e6rSJu1RUPQEco8GZccxOqAFiPZZkSZxS8QlifvdEzgVv"  class="rounded-circle" width="300" height="300"  alt="bird eye view of Addis ababa city"> 
<div class="card jam2">
  
    <p class="article-text">

    <?php

if (file_exists("text_files/dropdown/minilik.txt")){
$myData = file_get_contents("text_files/dropdown/minilik.txt");
}
?>
     <?php echo $myData;?>
 <br><br>
 <a class="btn btn-link" data-toggle="collapse" href="#menelik" role="button" aria-expanded="false" aria-controls="collapseExample ">
 Continue Reading   &#128315;
        
</a>
<div class="collapse " id="menelik">
  <div class="card card-body jam2">
      <p class="article-text">
   
      <?php

if (file_exists("text_files/dropdown/minilik2.txt")){
$myData = file_get_contents("text_files/dropdown/minilik2.txt");
}
?>
     <?php echo $myData;?>


    </p>
</div>
</div>
</div>
</div>
<div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 " >
<img src= "midia_file/hslase.jpg"  class="rounded-circle" width="300" height="300"  alt="bird eye view of Addis ababa city">
<div class="card jam2">
   <p class="article-text">

   <?php

if (file_exists("text_files/dropdown/Hslase.txt")){
$myData = file_get_contents("text_files/dropdown/Hslase.txt");
}
?>
     <?php echo $myData;?><br><br>
<a class="btn btn-link" data-toggle="collapse" href="#hailes" role="button" aria-expanded="false" aria-controls="collapseExample ">
Continue Reading   &#128315;

        
</a>
<div class="collapse " id="hailes">
  <div class="card card-body jam2">
      <p class="article-text">
 
      <?php

if (file_exists("text_files/dropdown/hslase2.txt")){
$myData = file_get_contents("text_files/dropdown/hslase2.txt");
}
?>
     <?php echo $myData;?>
</p>
    <div> 
</div>
<div> 
</div>
 </div>
 </div>

</main>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      
  <footer>

<div class="d-lg-none">
    <div class="container-fluid">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                <li class="page-item"><a class="page-link" href="Medieval Ethiopian.php">Previous</a></li>
                <li class="page-item " aria-current="page">
                    <a class="page-link" href="#">Top<span class="sr-only"></span></a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="index.php">Homepage</a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
    </div>
     <div>
     
     </div>
      <?php require 'include/footer.php'; ?>
</footer>