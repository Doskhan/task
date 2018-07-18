<?php
  include 'User.php';
  include 'header.php';
  Session::checkSession();
?>

<?php 
  $type = Session::get("type");

    
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
      <td><?php echo $data['id']; ?></td>
      <td><?php echo $data['name']; ?></td>
      <td><?php echo $data["phone"]; ?></td>
      <td><?php echo $data["email"]; ?></td>
      <?php 
        
        if ($user->isAdmin($type) | $id == $data["id"]) {
          # code...
       ?>
      <td><a class="btn btn-info" href="single.php?id=<?php echo $data["id"]; ?>">Edit</a></button></td>
      <td><a class="btn btn-danger" href="single.php?id=<?php echo $data["id"]; ?>">Delete</a></button></td>
        <?php 
          }
         ?>

    </tr>

    <?php 

      }}else{ ?>
      <tr><td colspan="5"><h2>No User Data Found</h2></td></tr>
      <?php } ?>

     <?php 
        
        if ($user->isAdmin($type)) {
          # code...
        
       ?>

    <tr><th>
      <button class="btn btn-success" type="submit">Add</button></th></tr>
<?php } ?>
      
  </table>
</div>
</div>
<div class="col-sm-1"></div>


 
</div>

</body>
</html>