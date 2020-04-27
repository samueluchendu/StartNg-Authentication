<?php session_start();

require_once('functions/alert.php');
require_once('functions/users.php');


     if (!staffLogin()) {

          header('location: login.php');
     }
 
   

?>

<h3> WELCOME STAFF</h3>
<p><a href='logout.php'>LOGOUT</a> <a href='viewAppointment.php'>View Appointment</a></p> 

<?php
 if (isset($_SESSION['success'])) {

      echo "<span style='color:green';>" . $_SESSION['success'] . "</span><br>";
      unset($_SESSION['success']);
} 
?>


<p> Name:<?php echo $_SESSION['userDetails']['firstname'] . "<br>"; ?> </p>
<p> Designation: <?php echo $_SESSION['userDetails']['designation'] . "<br>"; ?> </p>
<p> Designation: <?php echo $_SESSION['userDetails']['department'] . "<br>"; ?> </p>
<p> Registration time: <?php echo  $_SESSION['userDetails']['reg_time'] . "<br>"; ?> </p>
<p> Registration Date: <?php echo  $_SESSION['userDetails']['reg_date'] . "<br>"; ?> </p>
<p> Login Time: <?php echo $_SESSION['userDetails']['login_time'] . "<br>"; ?> </p>
<p> Login Date: <?php echo $_SESSION['userDetails']['login_date'] . "<br>"; ?> </p>
<p> Logout Time: <?php echo $_SESSION['userDetails']['logout_time'] . "<br>"; ?> </p>
<p> Logout Date: <?php echo $_SESSION['userDetails']['logout_date'] . "<br>"; ?> </p>