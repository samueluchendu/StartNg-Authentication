<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>

<h2>Login Here</h2>

<div>
  <?php if(isset($_SESSION['credentials'])){ echo "<span style='color:red';>". $_SESSION['credentials']. "</span><br>"; unset($_SESSION['credentials']); } ?>
  <?php if(isset($_SESSION['not_match'])){ echo "<span style='color:red';>". $_SESSION['not_match']. "</span><br>"; unset($_SESSION['not_match']); } ?>


<form action="processlogin.php" method="POST">
  <label for="email">Email:</label>
  <input type="email" name="email"><br>
  <?php if(isset($_SESSION['email'])){ echo "<span style='color:red';>". $_SESSION['email']. "</span><br>"; unset($_SESSION['email']); } ?>
  <?php if(isset($_SESSION['email1'])){ echo "<span style='color:red';>". $_SESSION['email1']. "</span><br>";unset($_SESSION['email1']);} ?>
   <?php if(isset($_SESSION['email2'])){ echo "<span style='color:red';>". $_SESSION['email2']. "</span><br>";unset($_SESSION['email2']);} ?>
    <?php if(isset($_SESSION['email3'])){ echo "<span style='color:red';>". $_SESSION['email3']. "</span><br>";unset($_SESSION['email3']);} ?>

  <br>
  <label for="password">Password:</label>
  <input type="password"  name="password" ><br>
  <?php if(isset($_SESSION['password'])){ echo "<span style='color:red';>". $_SESSION['password']. "</span><br>"; unset($_SESSION['password']); } ?>
  <?php if(isset($_SESSION['password1'])){ echo "<span style='color:red';>". $_SESSION['password1']. "</span><br>"; unset($_SESSION['password1']); } ?>

<br>

</select><br>
  <input type="submit" name="Submit">
</form> <p><a href="register.php">Click here to register</a></p>


<p>If you click the "Submit" button, the form-data will</p>
</div>
</body>
</html>
