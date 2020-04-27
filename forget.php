      <?php session_start();

        require_once('functions/alert.php');
        require_once('functions/email.php');

      ?>



      <!DOCTYPE html>
      <html>

      <body>
          <h2>Forget Password page</h2>

          <div>
              <?php print_error('error'); ?>

              <?php print_error('message'); ?>

              <form action="processforget.php" method="POST">
                  <label for="email">Email:</label>
                  <input type="email" name="email"><br>

                  <br>
                  <input type="submit" name="Submit" value="Request Email">
              </form>





          </div>

      </body>

      </html>