      <?php session_start();

      require_once('functions/alert.php');
      include("lib/header.php");

      if (!isset($_GET['token'])) {
        $_SESSION['error1'] = 'your not authorised to view this page';
        header("location: login.php");
      }

      ?>
    

      <body>




        <section class="newsletter">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="content">
                  <form action="processReset.php" method="POST">
                    <h2>Reset Password Page</h2>
                    <?php print_error('error'); ?>


                    <?php print_error('message'); ?>

                    <div class="input-group">
                      <input type="hidden" name="token" value="<?php echo $_GET['token'] ?>">
                      <input type="email" class="form-control" placeholder="Enter your email" name="email">
                      <input type="password" class="form-control" placeholder="Enter your password" name="password">
                      <span class="input-group-btn">
                        <button class="btn" name="Submit" type="submit">Reset Password</button>
                      </span>
                      <?php print_error('password_error'); ?>
                    </div>


                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>












        <!-- <h2>Reset Password Page</h2>

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

          </form> -->





       <?php include("lib/footer.php"); ?>