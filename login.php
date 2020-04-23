      <?php session_start();

      require_once('functions/alert.php');
        include("lib/header.php"); 

      ?>


      

      <body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
          <!-- Brand/logo -->
         <h3> <a class="navbar-brand" href="#">SNH</a> </h3>

          <!-- Links -->
         
        </nav>
        <br>
        <br>


        <div class="container">
          <div class="row mb-3 mt-5">
            <div class=" mx-auto col-md-6">
              <div class="card shadow-lg bg-white">
                <div class="card-header bg-info">
                  <h2 class="card-title text-center font-weight-bolder text-uppercase text-white-50">Login Form</h2>

                </div>
                <div class="card-body">
                  <?php print_error('email_error'); ?>
                  <?php print_error('message'); ?>
                  <form action="processlogin.php" method="POST" class="needs-validation" novalidate>

                    <div class="form-group">
                      <label class="font-weight-bold" for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      <div class="valid-feedback">Valid.</div>
                      <div><?php  print_error('email_error')  ;?></div>
                    </div>

                    <div class="form-group ">
                      <label class="font-weight-bold" for="pwd">Password</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                      <div class="valid-feedback">Valid.</div>
                      <div> <?php print_error('password_error'); ?></div>
                     </div>

                    <div class="form-check">
                      <a href="forget.php">Forget password?</a>
                      <a href="register.php">Click here to register</a>

                    </div>
                    <center class="mt-3">
                      <input type="submit" name="Submit" class="btn btn-info w-50" value="Login">
                    </center>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- <h2>Login Here</h2>

        <div>
          <?php
         // print_error('email_error');

          // if (isset($_SESSION['email_error'])) {


          //   echo "<span style='color:red';>" . $_SESSION['email_error'] . "</span><br>";
          //   unset($_SESSION['email_error']);
          // }



          ?>


          <?php
         // print_error('message');

          // if (isset($_SESSION['message'])) {

          //   echo "<span style='color:green';>" . $_SESSION['message'] . "</span><br>";
          //   unset($_SESSION['message']);
          // }
          ?>


          <form action="processlogin.php" method="POST">

            <label for="email">Email:</label>
            <input type="email" name="email"><br>

            <?php

           // print_error('email_error');

            // if (isset($_SESSION['email_error'])) {


            //   echo "<span style='color:red';>" . $_SESSION['email_error'] . "</span><br>";
            //   unset($_SESSION['email_error']);
            // }

            ?>

            <br>
            <label for="password">Password:</label>
            <input type="password" name="password"><br>

            <?php
           // print_error('password_error');

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
        </div> -->

        <?php include("lib/footer.php"); ?>