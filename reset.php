      <?php session_start();

        require_once('functions/alert.php');

        if (!isset($_GET['token'])) {
            $_SESSION['error1'] = 'your not authorised to view this page';
            header("location: login.php");
        }

        ?>
      <!DOCTYPE html>
      <html>

      <body>
          <h2>Reset Password Page</h2>

          <div>
              <?php
                print_error('error');
                //   if (isset($_SESSION['error'])) {

                //         echo "<span style='color:red';>" . $_SESSION['error'] . "</span><br>";
                //         unset($_SESSION['error']);
                //     }
                ?>

              <?php
                print_error('message');
                //   if (isset($_SESSION['message'])) {

                //         echo "<span style='color:red';>" . $_SESSION['message'] . "</span><br>";
                //         unset($_SESSION['message']);
                //     }
                ?>

              <form action="processReset.php" method="POST">

                  <label for="email">Email:</label>
                  <input type="email" name="email"><br>
                  <?php print_error('email_error'); ?>



                  <input type="hidden" name="token" value="<?php echo $_GET['token'] ?>"><br>
                  

                  <label for="password">New Password:</label>
                  <input type="password" name="password"><br>
                  <?php print_error('password_error'); ?>

                  <br>
                  <input type="submit" name="Submit" value="Reset Password">

              </form>





          </div>

      </body>

      </html>