
<!DOCTYPE html>
<html lang="en">


    <meta charset="UTF-8">
    <meta name="X-UA-Compatible" content="IE-chrome">
    <meta name="viewport" content="width = device-width,initial-scale = 1 ">
    <title>Ethiopian Hsitory </title>
   <!--compiled and minified CSS -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
   <!--Jquery library-->
   <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
   <!-- Popper JS -->
   <script type="text/javascript" src="popper.min.js"></script>
   <!--compiled JavaScript -->
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <p class="text-justify">
   <?php if (file_exists("text_files/fem.txt")){
$myData = file_get_contents("text_files/fem.txt");
}
?>
</head>

<div class="container "> 

    <div>
        <h1>Famous people of Ethiopian</h1>
        
<div class="dropdown-divider"></div>
        <br>
    <?php echo $myData;?> 

    <div id=abebe class= "text-right" > <h1><h2></div>
  
       
</p>  
</div>

<div class="dropdown-divider"></div>
<div>
   
 <a href="Untitled-1.php" class="btn btn-dark">Go back to Biography  
 </a>
</div>
<br>
<br>
<br>
<br>
<footer>
<?php require 'include/footer.php';?>
<script>
        $(document).ready(function() {
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
</footer>
