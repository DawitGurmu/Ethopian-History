<!DOCTYPE html>
<html lang="en">

<head>
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



    <?php require 'include/Amharicheder.php'; ?>
    <br><br>
    <br>

<body>
<div class="container">
<div class="row">
<div class="card  bg-primary jam  col-xs-12 col-sm-12 col-md-12  col-lg-12"  >


  <h1 class="display-3  text-center hedertext">ኢትዮ ሒስትሪ ዜና </h1>

  <p class="lead text-center hedertext"> የሳምንቱ አበይት ርእሰ</p>
  
 </div>
 </div>
</div>
<br/>
<div class="container">
 <div class="row">
<div class=" col-xs-12 col-sm-12  col-md-4 col-lg-4 " >
    <div class="card jam2 ">
        <h4 class="hedertext"><?php

if (file_exists("text_files/news_content_file/model_1_heder.txt")){
$myData = file_get_contents("text_files/news_content_file/model_1_heder.txt"); 
}
 ?>
             <?php echo $myData;?></h4>
        <img src="https://ichef.bbci.co.uk/news/660/cpsprodpb/CF9C/production/_109084135_65eb11a1-fa53-459a-8ac4-79d2e24a7597.jpg"
         width="340" height="190" class="card-img-top" alt="...">
        <p class="hedertext" ><?php

if (file_exists("text_files/news_content_file/model_1_content.txt")){
$myData = file_get_contents("text_files/news_content_file/model_1_content.txt");
}
 ?>
       <p class="hedertext">
             
        <?php echo $myData."<br>"."ምንጭ BBC";?> <br>
       </p>
            <a href="https://www.bbc.com/amharic/news-49922349" target="_blank" class="btn btn-dark">ምንጭ ክፈት</a>
    </div>
    </div>
    <div class="d-lg-none">
        .
</div>
<!---scond news model-->
    <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 " >
    <div class="card jam2">
    <h4 class="hedertext"><?php

if (file_exists("text_files/news_content_file/model_2_heder.txt")){
$myData = file_get_contents("text_files/news_content_file/model_2_heder.txt"); 
}
 ?>
             <?php echo $myData;?></h4>
    <img src="https://www.ethiopianreporter.com/sites/default/files/styles/medium/public/2019-10/amharic-I_5.jpg?itok=WZozbs_I" 
     width="340" class="card-img-top" height="190" alt="ጠቅላይሚንስትር አብይ አህመድ (Priminister abey Ahmed) ">
    <?php

if (file_exists("text_files/news_content_file/model_2_content.txt")){
$myData = file_get_contents("text_files/news_content_file/model_2_content.txt");
}
 ?>
                
    <p class="hedertext">
    <?php echo $myData."<br>"."ምንጭ Riporter";?> <br>    
    </p>

  
        <a href="https://www.ethiopianreporter.com/article/16893" target="_blank" class="btn btn-dark">ምንጭ ክፈት</a>
    </div>
</div>
<div class="d-lg-none">
        .
</div>
<!--threed news model-->
    <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 " >
    <div class="card jam2">
    <h4 class="hedertext"><?php

if (file_exists("text_files/news_content_file/model_3_heder.txt")){
$myData = file_get_contents("text_files/news_content_file/model_3_heder.txt"); 
}
 ?>
             <?php echo $myData;?></h4>
        <img src="https://www.dw.com/image/50630390_401.jpg" class="card-img-top"width="340" height="190" alt="...">
        <p class="hedertext" ><?php

if (file_exists("text_files/news_content_file/model_3_content.txt")){
$myData = file_get_contents("text_files/news_content_file/model_3_content.txt");
}
 ?>
       <p class="hedertext">
             
        <?php echo $myData."<br>"."ምንጭ DW";?> <br>
</p>
            <a href="https://www.dw.com/am/%E1%88%B5%E1%8D%96%E1%88%AD%E1%89%B5-%E1%88%98%E1%88%B5%E1%8A%A8%E1%88%A8%E1%88%9D-19-%E1%89%80%E1%8A%95-2011-%E1%8B%93%E1%88%9D/a-50649833" 
            target="_blank" class="btn btn-dark">ምንጭ ክፈት</a>
    </div>

    </div>
    
    <div class="container">
    <div class="d-lg-none">
    
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                <li class="page-item"><a class="page-link" href="amharic.php">Previous</a></li>
                <li class="page-item " aria-current="page">
                    <a class="page-link" href="#">Top <span class="sr-only"></span></a>
                </li>
             
                <li class="page-item">
                    <a class="page-link" href="Ketemoch.php">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
    </div>
     <div>
    <br/>
<footer  class="d-lg-none">
<?php require 'include/footer.php'; ?>
</footer>


<h1>Hello world <h1>