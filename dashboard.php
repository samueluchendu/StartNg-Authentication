<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head> </head>

<body>

  <h2> WELCOME TO THE DASHBOARD</h2>

  <p> Name:<?php echo $_SESSION['user_info']['firstname']."<br>"; ?> </p>
  <p> Designation:<?php echo $_SESSION['user_info']['designation']."<br>"; ?> </p>

  <?php





   ?>

</body>
</html>
