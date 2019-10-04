<?php $abebe = 'Abebe' ?>
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


</head>
<?php require 'include/header.php'; ?> <!--link header -->
<body>
  <br>
  <br>
  <br> <br>
  

    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <Div class="dropdown-divider"> </Div>
    <br>
    <div class="container">
  <div class="row">
     
    <table class="table table-striped table-dark table-bordered ">
      <thead>
        <tr>
  
          <th>Firstname</th>  <!-----tabel conteants--->
          <th>Lastname</th>
          <th>Knownfor</th>
          <th>Button</th>
          <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
      <tbody id=myTable>
        <?php
        $link_name="<a href=reder.php>Read</a>";
        $conn = mysqli_connect("localhost", "root", "123456", "test");
        // Check connection 
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Firstname,Lastname, Knownfor,go FROM recored";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row 
          while ($row = $result->fetch_assoc()) {
            echo "<tr ><td>" . $row["Firstname"] . "</td><td>" . $row["Lastname"] . "</td><td>"
              . $row["Knownfor"] . "</td><td>" . "$link_name " . " " . $row["go"] . "</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>
      </tbody>
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
  </div>
      </div>
      </div>

      <div class="d-lg-none">
    <div class="container-fluid">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                <li class="page-item"><a class="page-link" href="news.php">Previous</a></li>
                <li class="page-item " aria-current="page">
                    <a class="page-link" href="#">Top <span class="sr-only"></span></a>
                </li>
             
                <li class="page-item">
                    <a class="page-link" href="citys.php">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
    </div>
     <div>
</body>

</html>
</body>