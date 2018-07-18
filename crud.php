<?php
  include 'header.php';
  include 'User.php';
  Session::checkSession();
  $user = new User();
?>

<?php 
  

    
 ?>
<div class="col-sm-1"></div>
<div class="col-sm-10">

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
    <?php 

      $user = new User();
      $userData = $user->getAll();
      if ($userData) {
        # code...
        
        foreach ($userData as $data) {
          
     ?>
    
    <tr>
      <td><?php echo $data['ID']; ?></td>
      <td><?php echo $data['name']; ?></td>
      <td><?php echo $data["phone"]; ?></td>
      <td><?php echo $data["email"]; ?></td>
      <td><a class="btn btn-info" href="?action=edit?id=<?php echo $data["id"]; ?>">Edit</a></button></td>

      <td><a class="btn btn-danger" href="?action=delete?id=<?php echo $data["id"]; ?>">Delete</a></button></td>
    </tr>

    <?php 

      }}else{ ?>
      <tr><td colspan="5"><h2>No User Data Found</h2></td></tr>
      <?php } ?>

     

    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th><button class="btn btn-success" type="submit">Add</button></th></tr>
  </table>
</div>
</div>
<div class="col-sm-1"></div>


 
</div>

</body>
</html>