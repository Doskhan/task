<?php 
  include '../User.php';
  include 'header.php';
  $user = new User();
 ?>


 <?php 

  $loginmsg = Session::get("loginmsg");
  if (isset($loginmsg)) {
    # code... 
    echo $loginmsg;
  }
  ?>
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<h1>Welcome  <?php 

  $name = Session::get("name");
  if (isset($name)) {
    # code...
    echo $name;
  
  ?> !</h1>
  <?php 

    }else{


   ?>
   <p>pls, log in or register</p>
   <?php } ?>

	</div>
	<div class="col-sm-2"></div>


 
</div>
</div>
</body>
</html>