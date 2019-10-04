<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="X-UA-Compatible" content="IE-chrome">
    <meta name="viewport" content="width = device-width,initial-scale = 1 ">
    <title>Ethiopian Hsitory አማርኛ </title>
 <!--compiled and minified CSS -->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="include/index.css">
 <!--Jquery library-->
 <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
 <!-- Popper JS -->
 <script type="text/javascript" src="popper.min.js"></script>
 <!--compiled JavaScript -->
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
<header>
 <?php require 'include/amharicheder.php';?>
 </header>
<br><br>
<br>
<body>     
<div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      
      <div>
  
      <h5 class="card-title text-center hedertext"> በ ኢትጰያ ይስሩ </h5>
      <div class="embed-responsive embed-responsive-16by9" style="width: auto;">
    <video controls>
      <source src="midia_file/eth.mp4" type="video/mp4">
    Your browser does not support the video.</video> </div>
            

        </div>
        <br/>
        <div class="card">
  <img src="midia_file/eth.jpg" class="card-img-top" alt="...">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  ስለ ኢትዮጵያ በጥቂቱ ለማወቅ እዚህ ይጫኑ
</button>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ኢትዮጵያ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php

if (file_exists("text_files/amharic_shorthistory.txt")){
$myData = file_get_contents("text_files/amharic_shorthistory.txt");
}
?>
     <?php echo $myData;?>
                                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      <br/>
       <div class="jam">
<div class="card">
<div class= "card body bg-dark">
<h5 class="card-title text-center hedertext">ቅድመ ታሪክ ኢትዮጵያ</h5>
                <Div class="dropdown-divider"> </Div>
                <p class="card-text text-center hedertext">የ ፪ሺ አመታት ታሪክ ባህል  ጥበብ ማእከል እዲሁም በ አፍሪቃ እና በአለም የቀደምት ስልጣኔ ባለቤት።</p>
                    <Div class="dropdown-divider"> </Div>
                <a href="Ancient_Ethiopia.php" class="btn btn-primary">ድሕረገጽ ይጎብኙ </a>
</div>
</div>
<br/>
   <div class="card">
   <div class= "card body bg-dark">
<h5 class="card-title text-center hedertext ">መካከልኛ ዘመን ኢትዮጵያ</h5>
                <Div class="dropdown-divider"> </Div>
                <p class="card-text text-center hedertext">በመካከልኛ ዘመን  ኢትዮጵያ  የሰሜኑን ተራራማ አካባቢ እና ስምጥ ሸለቆውን ትከተሎ ወደደቡብ እና ምእራብ አቅጫ ግዛቶቿ መስፋፋት ጀመሩ ።</p>
                    <Div class="dropdown-divider"> </Div>
                    <a href="Medieval_Ethiopian.php" class="btn btn-primary">ድሕረገጽ ይጎብኙ </a>
</div>
</div>
<br/>
<div class="card">
   <div class= "card body bg-dark">
                <h5 class="card-title text-center hedertext">ዘምናዊ ኢትዮጵያ</h5>
                <Div class="dropdown-divider"> </Div>
                <p class="card-text text-center hedertext">1700 ጀምሮ 100 ለሚሆኑ አመታት ኢትዮጵያ ማዕከላዊ አገዛዝ ሳይኖሯት ቆይታለች፡፡ 
                  ይህም “ዘመነ መሳፍንት” ሲሆን በ1869 አፄ ቴዎድሮስ መሳፍንቶቹን ሁሉ አስገብረው ኢትዮጵያን አንድ አድርገዋል::</p>
                    <Div class="dropdown-divider"> </Div>
                <a href="Modern_Ethiopia.php" class="btn btn-primary">ድሕረገጽ ይጎብኙ </a>
                </div>
            </div>
<br/>
                
            

</div>
</div>


        
  
    
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
      <h2 class="hedertext" id="top"> ኢትዮጵያ</h2>
      <div class="dropdown-divider"></div>
        <div class="card bg-primary jam">
            <div class="card-body article-text">
                <?php

if (file_exists("text_files/amharic_shorthistory.txt")){
$myData = file_get_contents("text_files/amharic_shorthistory.txt");
}
 ?>
                </head>

                <div class="container ">

                    <div>

                        <?php echo $myData;?>




                    </div>
                </div>
        </div>
  </div>
</div>
    </div>
    </div>
</div>

</div>
</body>  

<br>
<footer>

<div class="d-lg-none">
    <div class="container-fluid">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                <li class="page-item"><a class="page-link" href="#">Top</a></li>
                <li class="page-item " aria-current="page">
                    <a class="page-link" href="#midipage">Middlepage <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#video">Video</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
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

</html>