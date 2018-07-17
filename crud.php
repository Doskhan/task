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
        <li><a href="login.php">Login </a></li>
        <li><a href="register.php">Register </a></li>
        <li class="active"><a href="crud.php">CRUD </a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a>Username</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="table-responsive">
  <table class="table">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Action</th>
    <th>Action</th>

    </tr>
    <tr>
      <td>1</td>
      <td>Admin</td>
      <td>123456</td>
      <td>admin@admin.com</td>
      <td><button class="btn btn-info" type="submit">Edit</button></td>

      <td><button class="btn btn-danger" type="submit">Delete</button></td>
    </tr>
    <tr><th><button class="btn btn-success" type="submit">Add</button></th></tr>
  </table>
</div>


 
</div>
</div>
</body>
</html>