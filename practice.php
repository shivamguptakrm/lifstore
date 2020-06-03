<?php 
require'common.php';
if(!isset($_SESSION['Email'])){
header('location: login.php');
}
//include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Settings | Lifestyle Store</title>
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
  <script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css\style.css">  
</head>
<body>
  
  <?php
  //include'header.php';

  include'footer.php';
  echo "<br><br><br><br><br><br>";
  ?>
  <div class="container" style="margin-top: 70px;">
    <div class="col-md-6 col-md-offset-3">
      <h2>Change Password</h2>
      <form action="server.php" method="POST">
        <?php include('error.php'); ?>
        <div <?php if (isset($name_error)) ?>class="form-group"><input class="form-control" type="password" name="Password" placeholder="Old Password" required="true">
          <?php if (isset($name_error)) { ?>
      <span><?php echo $name_error; } ?></span>
        </div>
        <div class="form-group"><input class="form-control" type="password" name="newpass" placeholder="New Password" required="true">
          <?php if (isset($name_error)) { ?>
      <span><?php echo $name_error; } ?></span>
        </div>
        <div class="form-group"><input class="form-control" type="password" name="newpass2" placeholder="Re-type New Password" required="true">
          <?php if (isset($name_error)) { ?>
      <span><?php echo $name_error; } ?></span>
        </div>
        <input class="btn btn-primary btn-lg" type="submit" name="Change" value="Change">
      </form>
    </div>
  </div>
</body>
</html>

