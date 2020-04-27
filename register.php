<?php session_start();

require_once('functions/alert.php');
require_once('functions/users.php');


if (isUserLogIn()) {

     header('location: dashboard.php');

}


if (@$_SESSION['designation'] == 'Admin') {

     header('location: admin_dashboard.php');
}

?>
<!DOCTYPE html>
<html>

<body>



  <h2>HTML Forms</h2>
  <div>
    <form action="processRegister.php" method="POST">
      <label for="fname">First name:</label>
      <input type="text" name="fname"><br>

      <?php print_error('firstname_error'); ?>
      <br>


      <label for="lname">Last name:</label>
      <input type="text" name="lname"><br>


      <?php  print_error('lastname_error'); ?>
      <br>



      <label for="gender">Gender:</label>
      <select name="gender">

        <option value=" ">please select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>

      </select><br>
      <?php print_error('gender_error'); ?>
      <br>


      <label for="gender">Department:</label>
      <select name="department">

        <option value=" ">please select</option>
        <option value="Laboratory">Laboratory</option>
        <option value="Radiology">Radiology</option>

      </select><br>
      <br>



      <label for="designation">Designation:</label>
      <select name="designation">

        <option value=" ">please select</option>
        <option value="Staff">Staff</option>
        <option value="Patient">Patient</option>

      </select><br>

      <?php  print_error('designation_error'); ?>

      <br>


      <label for="email">Email:</label>
      <input type="email" name="email"><br>

      <?php print_error('email_error'); ?>
      <br>


      <label for="password">Password:</label>
      <input type="password" name="password"><br>

      <?php  print_error('password_error'); ?>
      <br>


      </select><br>

      <input type="submit" name="Submit">

    </form>

    <p>If you click the "Submit" button, the form-data will</p>

</body>

</html>