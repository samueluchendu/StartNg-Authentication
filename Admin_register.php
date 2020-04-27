<?php session_start();

require_once('functions/alert.php');
require_once('functions/users.php');


if (!adminLogin()) {

  header('location: login.php');

}

?>


<!DOCTYPE html>
<html>

<body>



  <h2>HTML Forms</h2>
  <div>
    <form action="AdminProcessRegister.php" method="POST">
      <label for="fname">First name:</label>
      <input type="text" name="fname"><br>

      <?php
         print_error('firstname_error');
      // if (isset($_SESSION['firtsname_error'])) {

      //   echo "<span style='color:red';>" . $_SESSION['firtsname_error'] . "</span><br>";
      //   unset($_SESSION['firtsname_error']);
      // }

      ?>
      <br>

      <label for="lname">Last name:</label>
      <input type="text" name="lname"><br>


      <?php
      print_error('lastname_error');
      // if (isset($_SESSION['lastname_error'])) {

      //   echo "<span style='color:red';>" . $_SESSION['lastname_error'] . "</span><br>";
      //   unset($_SESSION['lastname_error']);
      // }
      ?>

      <br>



      <label for="gender">Gender:</label>
      <select name="gender">

        <option value=" ">please select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>

      </select><br>
      <?php
      print_error('gender_error');
      // if (isset($_SESSION['gender_error'])) {

      //   echo "<span style='color:red';>" . $_SESSION['gender_error'] . "</span><br>";
      //   unset($_SESSION['gender_error']);
      // }

      ?>
      <br>


      <label for="gender">Department:</label>
      <select name="department">

        <option value=" ">please select</option>
        <option value="Laboratory">Laboratory</option>
        <option value="Radiology">Radiology</option>

      </select><br>
      <?php
          print_error('department_error');

          // if (isset($_SESSION['department_error'])) {

          //   echo "<span style='color:red';>" . $_SESSION['department_error'] . "</span><br>";
          //   unset($_SESSION['department_error']);

          // }

      ?>
      <br>



      <label for="designation">Designation:</label>
      <select name="designation">

        <option value=" ">please select</option>
        <option value="Staff">Staff</option>
        <option value="Patient">Patient</option>

      </select><br>
      <?php
         print_error('designation_error');
          // if (isset($_SESSION['designation_error'])) {

          //   echo "<span style='color:red';>" . $_SESSION['designation_error'] . "</span><br>";
          //   unset($_SESSION['designation_error']);
            
          // }

      ?>

      <br>


      <label for="email">Email:</label>
      <input type="email" name="email"><br>

      <?php
         print_error('email_error');
      // if (isset($_SESSION['email_error'])) {


      //   echo "<span style='color:red';>" . $_SESSION['email_error'] . "</span><br>";
      //   unset($_SESSION['email_error']);
      // }



      ?>

      <br>

      <label for="password">Password:</label>
      <input type="password" name="password"><br>

      <?php
        print_error('password_error');
      // if (isset($_SESSION['password_error'])) {

      //   echo "<span style='color:red';>" . $_SESSION['password_error'] . "</span><br>";
      //   unset($_SESSION['password_error']);
      // }
      ?>

      <br>

      </select><br>

      <input type="submit" name="Submit">

    </form>

    <p>If you click the "Submit" button, the form-data will</p>

</body>

</html>