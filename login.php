<?php 
  include 'header.php';
  include 'User.php';
 ?>


 <?php 
  $user = new User();
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    # code...
    $userLog = $user->userLogin($_POST); 
  }
 ?>

<?php 
  if (isset($userLog)) {
    # code...
    echo $userLog;
  }
 ?>

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<form action="" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <button type="submit" name="login" class="btn btn-default">Submit</button>
</form> 

	</div>
	<div class="col-sm-2"></div>


 
</div>
</div>
</body>
</html>