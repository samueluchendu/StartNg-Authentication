<?php session_start();
require_once('functions/alert.php');
require_once('functions/users.php');


  

?>


<!DOCTYPE html>
<html>

<body>

    <h2>Book Appointment</h2>

    <form action="processAppointment.php" method="POST">

        <p>
            <label for="fname">First name:</label>
            <input type="text" name="fname" value="<?php echo $_SESSION['userDetails']['firstname']; ?>" readonly>

        </p>
        <?php
           print_error('firstname_error');
        // if (isset($_SESSION['firstname_error'])) {

        //     echo "<span style='color:red';>" . $_SESSION['firstname_error'] . "</span><br>";
        //     unset($_SESSION['firstname_error']);
        // }

        ?>


        <p>
            <label for="lname">Last name:</label>
            <input type="text" name="lname" value="<?php echo $_SESSION['userDetails']['lastname']; ?>" readonly>

        </p>
        <?php
          print_error('lastname_error');
        // if (isset($_SESSION['lastname_error'])) {

        //     echo "<span style='color:red';>" . $_SESSION['lastname_error'] . "</span><br>";
        //     unset($_SESSION['lastname_error']);
        // }

        ?>

        <p>

            <p>
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $_SESSION['userDetails']['email']; ?>" readonly><br>

                <?php
                print_error('email_error');
                // if (isset($_SESSION['email_error'])) {


                //     echo "<span style='color:red';>" . $_SESSION['email_error'] . "</span><br>";
                //     unset($_SESSION['email_error']);
                // }



                ?>

                <br>
            </p>

            <label for="department">Department:</label>
            <select name="department">

                <option value=" ">please select</option>
                <option value="Laboratory">Laboratory</option>
                <option value="Radiology">Radiology</option>

            </select><br>

            <?php
               print_error('department_error');
            // if (isset($_SESSION['department_error'])) {

            //     echo "<span style='color:red';>" . $_SESSION['department_error'] . "</span><br>";
            //     unset($_SESSION['department_error']);
            // }

            ?>

        </p>



        <p>
            <label for="nature">Nature of Appointment:</label>
            <input type="text" name="NatureOfAppointment">

        </p>
        <?php
        print_error('nature_error');
        // if (isset($_SESSION['nature_error'])) {

        //     echo "<span style='color:red';>" . $_SESSION['nature_error'] . "</span><br>";
        //     unset($_SESSION['nature_error']);
        // }

        ?>


        <p>
            <label for="birthday">Date of Appointment:</label>
            <input type="date" name="dateOfAppointment" required>

        </p>



        <p>
            <label for="appt">Time of Appointment:</label>
            <input type="time" name="timeOfAppointment" required>


        </p>


        <p>
            <label for="complaint">Initial Complaint</label>
            <textarea name="complaint" rows="4" cols="30" required></textarea>

            <?php
                print_error('complaint_error');
            // if (isset($_SESSION['complaint_error'])) {

            //     echo "<span style='color:red';>" . $_SESSION['complaint_error'] . "</span><br>";
            //     unset($_SESSION['complaint_error']);
            // }

            ?>

        </p><br>




        <p> <input type="submit" name="Submit"> </p>

    </form>

    </div>

    <p>If you click the "Submit" button, the form-data will</p>

</body>

</html>
