<?php include 'header.php'; ?>

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<form action="/action_page.php" method="POST">
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