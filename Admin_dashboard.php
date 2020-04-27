<?php session_start();

require_once('functions/alert.php');
require_once('functions/users.php');


  if (!adminLogin()) {

    header('location: login.php');
    
  }


?>

<h3> WELCOME ADMIN</h3>
<p><a href='logout.php'>LOGOUT</a> <a href="viewPatient.php">View Patient</a> <a href="viewStaff.php">View Staff</a></p>


<?php "<span style='color:green';>" .print_error('message'). "</span><br>"; ?>




<p> Name:<?php echo $_SESSION['userDetails']['firstname'] . "<br>"; ?> </p>

<p> Designation:<?php echo $_SESSION['userDetails']['designation'] . "<br>"; ?> </p>

<p> Registration time:<?php echo  $_SESSION['userDetails']['reg_time'] . "<br>"; ?> </p>

<p> Registration Date:<?php echo  $_SESSION['userDetails']['reg_date'] . "<br>"; ?> </p>

<p> Login Time:<?php echo $_SESSION['userDetails']['login_time'] . "<br>"; ?> </p>

<p> Login Date:<?php echo $_SESSION['userDetails']['login_date'] . "<br>"; ?> </p>

<p> Last Login Time:<?php echo $_SESSION['userDetails']['logout_time'] . "<br>"; ?> </p>

<p> Last Login Date:<?php echo $_SESSION['userDetails']['logout_date'] . "<br>"; ?> </p>




<h3>
  <p><a href="Admin_register.php">Add User</a></p>

</h3>