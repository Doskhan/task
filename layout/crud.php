<?php
  include '../User.php';
  include 'header.php';
  Session::checkSession();
?>

<?php 
  $type = Session::get("type");
  $user = new User();
      
 if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    # code...
    $userDel = $user->userDelete($_GET['id']);
    // header("Location: index.php");

  }
 ?>
 <?php 
  if (isset($userDel)) {
    # code...
    echo $userDel;
  }
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
     
      
    </tr>
    <?php 

      
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
        
        if ($user->isAdmin($type) ) {
          # code...
       ?>
      <td><a class="btn btn-info" href="single.php?id=<?php echo $data["id"]; ?>">Edit</a></button></td>
      <td><a class="btn btn-danger" href="?action=delete&id=<?php echo $data["id"]; ?>">Delete</a></button></td>
        <?php 
          }
          elseif ($id == $data["id"]) { ?>
            
            <td><a class="btn btn-info" href="single.php?id=<?php echo $data["id"]; ?>">Edit</a></button></td>
            <?php
          }
         ?>

    </tr>

    <?php 

      }}else{ ?>
      <tr><td colspan="5"><h2>No User Data Found</h2></td></tr>
      <?php } ?>

     
  </table>
</div>
</div>
<div class="col-sm-1"></div>


 
</div>

</body>
</html>