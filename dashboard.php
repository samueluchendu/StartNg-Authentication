<?php session_start();


require_once('functions/alert.php');
require_once('functions/users.php');


      if (isUserLogIn()) {

            header('location: login.php');
      }


      if (adminLogin()) {

            header('location: admin_dashboard.php');
      }




      if (staffLogin()) {

            header('location: staff_dashboard.php');
      }

?>
<!DOCTYPE html>
<html>

<head> </head>

<body>

      <?php
      
      echo "<span style='color:green';>" . print_error('message') . "</span><br>";
            // if (isset($_SESSION['success'])) {

            //       echo "<span style='color:green';>" . $_SESSION['success'] . "</span><br>";
            //       unset($_SESSION['success']);
            // }

      ?>
      <p> <a href="payBill.php">Pay Bill</a> <a href="bookAppointment.php">Book Appointment</a></p>


      <h2> WELCOME TO THE DASHBOARD</h2>

      <p> Name:<?php echo $_SESSION['userDetails']['firstname'] . "<br>"; ?> </p>

      <p> Designation:<?php echo $_SESSION['userDetails']['designation'] . "<br>"; ?> </p>

      <p> Registration Time: <?php echo  $_SESSION['userDetails']['reg_time'] . "<br>"; ?> </p>

      <p> Registration Date: <?php echo   $_SESSION['userDetails']['reg_date'] . "<br>"; ?> </p>

      <p> Login Time:<?php echo $_SESSION['userDetails']['login_time'] . "<br>"; ?> </p>

      <p> Login Date:<?php echo $_SESSION['userDetails']['login_date'] . "<br>"; ?> </p>

      <p>Last Login Time:<?php echo $_SESSION['userDetails']['logout_time'] . "<br>"; ?> </p>

      <p>Last Login Date:<?php echo $_SESSION['userDetails']['logout_date'] . "<br>"; ?> </p>




      <p><a href='logout.php'>LOGOUT</a></p>


</body>

</html>