<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script> 
</head>
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
        <li ><a href="login.php">Login </a></li>
        <li class="active"><a href="register.php">Register </a></li>
        <li><a href="crud.php">CRUD </a></li>
   
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<form action="/action_page.php">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="number">Phone number:</label>
    <input type="text" class="form-control" id="number">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form> 

	</div>
	<div class="col-sm-2"></div>


 
</div>
</div>
</body>
</html>