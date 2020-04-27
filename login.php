      <?php session_start();

      require_once('functions/alert.php');

      ?>


      <!DOCTYPE html>
      <html>

      <body>

        <h2>Login Here</h2>

        <div>
          <?php
             print_error('email_error');

          // if (isset($_SESSION['email_error'])) {


          //   echo "<span style='color:red';>" . $_SESSION['email_error'] . "</span><br>";
          //   unset($_SESSION['email_error']);
          // }



          ?>


          <?php
              print_error('message') ;
              
          // if (isset($_SESSION['message'])) {

          //   echo "<span style='color:green';>" . $_SESSION['message'] . "</span><br>";
          //   unset($_SESSION['message']);
          // }
          ?>


          <form action="processlogin.php" method="POST">

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
          <p><a href="register.php">Click here to register</a> <a href="forget.php">Forget password?</a></p>



          <p>If you click the "Submit" button, the form-data will</p>
        </div>
      </body>

      </html>