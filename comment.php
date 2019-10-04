<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="X-UA-Compatible" content="IE-chrome">
    <meta name="viewport" content="width = device-width,initial-scale = 1 ">
    <title>Ethiopian Hsitory </title>
    <!--compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/include/index.css">
    <!--Jquery library-->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Popper JS -->
    <script type="text/javascript" src="popper.min.js"></script>
    <!--compiled JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
   
 

    <?php require 'include/header.php'; ?>
    <br><br>
    <br>

<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<div class="container">
 <div class="row">
<div class=" col-xs-12 col-sm-12  col-md-4 col-lg-8 " >
<div class="card  text-white jam">
<div class="card-heading hedertext"><h4>Submit Your Comments</h4></div>
  <div class="card-body">
  	<form method="post">
  	  <div class="form-group">
      <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername" >Name</label>
      <div class="input-group">
        <div class="input-group-prepend">
          
        </div>
        <input type="text" name="name"  class="form-control" id="exampleInputEmail1"   aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>

	    <!--label for="exampleInputEmail1">Name</label>
	    <input type="text" name="name" class="form-control" id="validationDefaultUsername" placeholder="Name">
    </div>
     
	  <!div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div-->
    
    <label>Comment</label>
  <textarea name="subject" class="form-control" rows="5"></textarea>
      </div>
  
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
    
  </div>
</div>
<br/>
<?php require('com_connect.php');
?>

<?php $sql = "SELECT * FROM comments";
$res = mysqli_query($connection, $sql); 

	while ( $r = mysqli_fetch_assoc($res)) {
?>
 </div>
 </div>
 <div class="container">
<div class="row">
<div class=" col-xs-12 col-sm-12  col-md-4 col-lg-6 " >    
<div class="text-white">     
<div class="card bg-dark jam" >
		<th scope="row"><?php echo $r['id']; ?></th> 
		<th><?php echo $r['cid']; ?></th> <br/>
		<th><?php echo $r['name'] ?></th> <br/>
		<td><?php echo $r['subject']; ?></td> <br/>
    <td><?php echo $r['submittime']; ?></td> <br/>
  

        	
<a href="delcomment.php?id=<?php echo $r['id']; ?>">Del</a>   
		<!--td><//?php if(isset($r['status']) & !empty($r['status'])){echo $r['status'];}else{echo "NA";} ?></td--> 
        <!--td><a href="editcomment.php?id=<//?php echo $r['id']; ?>">Edit</a> <a href="commentstatus.php?id=<//?php echo $r['id']; 
        ?>&status=publish">App</a> <a href="commentstatus.php?id=<//?php echo $r['id']; ?>&status=draft">Dis</a-->
         <!---a href="delcomment.php?id=<//?php echo $r['id']; ?>">Del</a-->
         
         



    </div> 
    </div>
</div>
</div>
 </div>
<br/>
<br/>
<?php } ?>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">About Developer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<footer>
<?php require 'include/footer.php'; ?>
</footer>
