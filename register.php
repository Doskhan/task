<?php 
include 'header.php'; 
include 'User.php'; 
 
?>

<?php 
  $user = new User();
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    # code...
    $userReg = $user->userRegistration($_POST); 
  }
 ?>

<?php 
  if (isset($userReg)) {
    # code...
    echo $userReg;
  }
 ?>

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<form action="" method="POST">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="phone">Phone number:</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <button type="submit" name="register" class="btn btn-default">Submit</button>
</form> 

	</div>
	<div class="col-sm-2"></div>


 
</div>
</div>
</body>
</html>