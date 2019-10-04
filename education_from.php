
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
<?php require 'include/header.php';?>
<br>
<br>
<br>
<br>
<br>
<h1 class="hedertext">Register for volunteer work in community education </h1>
<div class="container text-center">
<body>
        <span class="badge badge-success input-group-lg" href="Webpro.html">ETHISTORY</span>
        <div class="container" >
                <div class="col px-md-5"><div class="p-3 border bg-light">  
     
<form  action="education_connect.php" method="post"  class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Firstname</label>
            <input type="text" name="firstname"  class="form-control" id="validationCustom01" placeholder="First name"  required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustom02">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="validationCustom02" placeholder="Last name"   required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustomUsername">Email</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><img src="midia_file/email_logo.png"width="25" height="25"alt="" class="rounded-circle"></span>
              </div>
              <input type="text"  name="username"  class="form-control" id="validationCustomUsername" placeholder="Email"aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please provide Email.
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationCustom03">Country</label>
            <input type="text"  name="country" class="form-control" id="validationCustom03" placeholder="City" required >
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label  for="validationCustom04">City</label>
            <input type="text" name="city" class="form-control" id="validationCustom04" placeholder="State"  required>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationCustom05">phone</label>
            <input type="text" name="phone" class="form-control" id="validationCustom05" placeholder="phone" required>
            <div class="invalid-feedback">
              Please provide a valid zip.
            </div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
      </form>
      <script>
        console.log(localStorage)
        </script>
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      
      </script>
        
      </div>
        
    </div>
    
</body>
</div>