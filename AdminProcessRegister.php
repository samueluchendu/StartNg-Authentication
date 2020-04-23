<?php session_start();

require_once('functions/alert.php');
require_once('functions/users.php');
require_once('functions/validation.php');

////ERROR ARRAY;
$errors = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //  validateFirstName($firstname = $_POST['fname']);

        if (empty($_POST['fname'])) {

                $errors++;

               // $_SESSION['firtsname_error'] = 'Name is required';
                  set_alert('firstname_error', 'Name is required');
                 header('location: Admin_register.php');


        } else {

                $firstname = $_POST['fname'];

                if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $firstname)) {

                        $errors++;

                       // $_SESSION['firtsname_error'] = 'Numbers not required in name field';
                        set_alert('firstname_error', 'Numbers not required in name field');
                        header('location: Admin_register.php');

                   }

                if (strlen($firstname) <= 2) {

                        $errors++;

                       // $_SESSION['firtsname_error'] = 'Name must not be short';
                        set_alert('firstname_error', 'Name must not be short');

                        header('location: Admin_register.php');

                  }

                if (is_numeric($firstname)) {

                      $errors++;

                      //$_SESSION['firtsname_error'] = 'Numbers not allowed in name field';
                      set_alert('firstname_error', 'Numbers not allowed in name field');
                      header('location: Admin_register.php');

            }

            }  //Name field validation ends here



    //  validateLastName($lastname = $_POST['lname']);

                if (empty($_POST['lname'])) {

                        $errors++;

                       // $_SESSION['lastname_error'] = 'LastName is required';
                        set_alert('lastname_error', 'LastName is required');
                        header('location: Admin_register.php');

           } else {

                  $lastname = $_POST['lname'];

                  if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $lastname)) {

                          $errors++;

                          //$_SESSION['lastname_error'] = 'Numbers not required in lastname field';
                          set_alert('lastname_error', 'Numbers not required in lastname field');
                          header('location: Admin_register.php');

                      }


                  if (strlen($lastname) <= 2) {

                          $errors++;

                          //$_SESSION['lastname_error'] = 'LastName must not be short';
                          set_alert('lastname_error', 'LastName must not be short');
                          header('location: Admin_register.php');

                  }


                  if (is_numeric($lastname)) {

                          $errors++;

                         // $_SESSION['lastname_error'] = 'Numbers not allowed in lastname field';
                          set_alert('lastname_error', 'Numbers not allowed in lastname field');
                          header('location: Admin_register.php');}


                    }  


     // validateGender($gender = $_POST['gender']);
            if ($_POST['gender'] == " ") {

                    $errors++;

                   // $_SESSION['gender_error'] = 'Gender is required';
                    set_alert('gender_error', 'Gender is required');
                    header('location: Admin_register.php');



            } else{

                      $gender=$_POST['gender'];

            } 



            if ($_POST['department'] == " ") {

                  $errors++;

                 // $_SESSION['department_error'] = 'department is required';
                  set_alert('department_error', 'department is required');
                  header('location: Admin_register.php');

            }else{

                  $department=$_POST['department'];

            }


    //  validateDesignation($designation = $_POST['designation']);
      if ($_POST['designation'] == " ") {

            $errors++;

           // $_SESSION['designation_error'] = 'designation is required';
            set_alert('designation_error', 'designation is required');
            header('location: Admin_register.php');


      }else{

            $designation=$_POST['designation'];

      }

     // validatePassword($password = $_POST['password']);

            if (empty($_POST['password'])) {

                    $errors++;

                    //$_SESSION['password_error'] = 'password is required';
                    set_alert('password_error', 'password is required');
                    header('location: Admin_register.php');


            } else {

                  $password = $_POST['password'];

                  if (strlen($password) <= 7) {

                        $errors++;

                       // $_SESSION['password_error'] = 'paasword must atleast be 8 characters';
                        set_alert('password_error', 'password must atleast be 8 characters');
                        header('location: Admin_register.php');
                      
                    }

        }





  //Validation for Email field//////////
            if (empty($_POST['email'])) {

                  $errors++;

                 // $_SESSION['email_error'] = 'email is required';
                  set_alert('email_error', 'Email is required');
                  header('location: Admin_register.php');
                  
      } else {

               $email = $_POST['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                  $errors++;

                  //$_SESSION['email_error'] = 'Email is invalid';
                  set_alert('email_error', 'Email is invalid');
                  header('location: Admin_register.php');
              
              }

            if (strlen($email) <= 5) {

                  $errors++;

                 // $_SESSION['email_error'] = 'Email must not be less than 5';
                  set_alert('email_error', 'Email must not be less than 5');
                  header('location: Admin_register.php');
              
              }

              if (!strpos($email, '.')) {

                    $errors++;

                   // $_SESSION['email_error'] = 'Email must contain ' . ". " . 'symbol';
                    set_alert('email_error', 'Email must contain ' . ". " . 'symbol');
                    header('location: Admin_register.php');
              
              }


  }







    if ($errors > 0) {

      
      'you have  errors';
      
    } else{

           // registerUser($firstname, $lastname, $email, $gender, $designation, $department, $password);
   
          $all_users= scandir("db/user/");
          $count_users = count($all_users);

          $user_id = $count_users-1;
          date_default_timezone_set("Africa/Lagos");

          $register_time =date("h:i:sa");
          $register_date = date("Y-m-d");


//putting user info into an array object for proper storage in the file system
          $NewUserDetails=[

            'id' => $user_id,
            'reg_time' => $register_time,
            'reg_date' => $register_date,
           
            'firstname' =>$firstname,
            'lastname' =>$lastname,
            'email' =>$email,
            'gender' =>$gender,
            'designation' =>$designation,
            'department' =>$department,
            'password' =>password_hash($password, PASSWORD_DEFAULT)

          ];


           $_SESSION['NewUserDetails']= $NewUserDetails;

            //checking to see if user already exist in the database before storage.

            for ($counter=0; $counter < $count_users ; $counter++) {

                   $current_user = $all_users[$counter];

           // $userExist = checkUser($email);

                  if($current_user == $email . ".json" ){

                        $errors++ ;

                       // $_SESSION['email_error']='user already exist';
                        set_alert('email_error', 'user already exist');
                        header('location: Admin_register.php');
                    
                      
                  }
            }


           // $_SESSION['message'] = "User Registered successfully";
             set_alert('message', 'User Registered successfully');
            
            file_put_contents("db/user/".$email.".json" , json_encode($NewUserDetails));
            // saveUser($NewUserDetails);
            header('location:  Admin_dashboard.php');

}






}
      // else{

      //       echo 'NO form have been submitted';

      //       }



 ?>
