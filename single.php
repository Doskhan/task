<?php 
include 'User.php';
include 'header.php'; 
Session::checkSession();
?>
<?php 
  if (isset($_GET['id'])) {
    # code...
    $userID = (int)$_GET['id'];
  }
  $user = new User();

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    # code...
    $userUpdate = $user->userUpdate($userID,$_POST); 
  }
 ?>


<div class="well"></div>
<div class="row">

  <div class="col-sm-2"></div>
  <div class="col-sm-8">
      <?php 
  if (isset($userUpdate)) {
    # code...
    echo $userUpdate;
  }
 ?>

    <?php 

    $userData = $user->getUserById($userID);
    if ($userData) {
      # code...

     ?>
    <form action="" method="POST">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $userData->name; ?>">
  </div>

  <div class="form-group">
    <label for="phone">Phone number:</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $userData->phone; ?>">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $userData->email ;?>">
  </div>
  <?php 

    $sisID = Session::get("id");
    if ($userID == $sisID) {

   ?>
      <button type="submit" name="update" class="btn btn-default">Update</button>

  <?php 
    }

   ?>
  
</form> 
<?php 
    
    }
 ?>
  </div>
	<div class="col-sm-2"></div>


 
</div>
</div>
</body>
</html>