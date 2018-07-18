<?php 
	include_once 'Session.php';
	Session::init();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script> 
</head>

<?php 

	if (isset($_GET['action']) && $_GET['action'] == 'logout') {
		# code...
		Session::destroy();
	}
 ?>
<body>
	<div class="container">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="login.php">Login </a></li>
        <li><a href="register.php">Register </a></li>
        <li><a href="crud.php">CRUD </a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right"><li><a>
 <?php 

  $name = Session::get("name");
  if (isset($name)) {
    # code...
    echo $name;
  }
  ?>
      	

   </a></li>
        
        <?php 

        	$id = Session::get("id");
        	$userLogin = Session::get("login");
        	if ($userLogin == true) {
        	?>
        		<li><a href="single.php?id="<?php echo $id;?>>Profile</a></li>
        		<li><a href="?action=logout">Logout</a></li>
        	<?php  }?>

         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



 

