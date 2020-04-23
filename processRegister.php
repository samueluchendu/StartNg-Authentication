<?php session_start();

require_once('functions/alert.php');
require_once('functions/users.php');
require_once('functions/validation.php');

$errors= 0;


if($_SERVER["REQUEST_METHOD"] == "POST"){

      validateFirstName($firstname=$_POST['fname']);


      validateLastName($lastname= $_POST['lname']);

      // if (empty($_POST['lname'])) {

      //         $errors++;

      //         set_alert('lastname_error',  'LastName is required');
      //         header('location: register.php');

      // }
      // else{

      //           $lastname=$_POST['lname'];

      //           if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $lastname)) {

      //                 $errors++ ;


      //             set_alert('lastname_error',   'Numbers not required in lastname field');
      //                header('location: register.php');
      //           }

      //           if (strlen($lastname) <= 2) {

      //                 $errors++ ;


      //                   set_alert('lastname_error',   'LastName must not be short');
      //                  header('location: register.php');

      //            }


      //           if (is_numeric($lastname)) {

      //                 $errors++ ;


      //                 set_alert('lastname_error',   'Numbers not allowed in lastname field');
      //                 header('location: register.php');

      //           }


      // }  

      validateGender($gender=$_POST['gender']);
 
            //     if ($_POST['gender'] == " ") {

            //           $errors++;

                     
            //          set_alert('gender_error',  'Gender is required');
            //           header('location: register.php');

            //     }else {

            //            $gender=$_POST['gender'];

            //      }




                  if (isset($_POST['department'])) {

                 
                        $department = $_POST['department'];
                  }


      validateDesignation($designation = $_POST['designation']);

      //         if ($_POST['designation'] == " ") {

      //               $errors++ ; 


      //               set_alert('designation_error',  'designation is required');
      //               header('location: register.php');

      //         } else {

      //             $designation=$_POST['designation'];

      //     }
      validatePassword($password= $_POST['password']);

      //         if (empty($_POST['password'])) {

      //               $errors++ ; 

      //               //$_SESSION['password_error'] = 'password is required';
      //              set_alert('password_error',   'password is required');

      //               header('location: register.php');

      //      } else {

      //             $password=$_POST['password'];

      //             if (strlen($password) <= 7) {

      //                   $errors++ ;


      //                   set_alert('password_error',   'paasword must atleast be 8 characters');

      //                   header('location: register.php');
      //             }

      //   } 


    // validateEmail($email= $_POST['email']);

               if (empty($_POST['email'])) {

                     $errors++ ;

                   
                   set_alert('email_error',   'email is required');
                     header('location: register.php');

              } else {

                       $email=$_POST['email'];

                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                          $errors++ ;
                          
                         // $_SESSION['email_error'] = 'Email is invalid';
                          set_alert('email_error',   'Email is invalid');
                          header('location: register.php');
                    }

                    if (strlen($email) <= 5) {

                        $errors++ ;

                      
                        set_alert('email_error',  'Email must not be less than 5');
                        header('location: register.php');

                    }

                    if (!strpos($email, '.')) {

                          $errors++ ;
                          
                      
                         set_alert('email_error',  'Email must contain ' . ". " . 'symbol');
                          header('location: register.php');

                    }


      }





  //checking for errors and inserting into database;

    if ($errors > 0) {

         'you have  errors';

    } else {

            //  TestingRegistration($firstname, $lastname, $email, $gender, $designation, $department, $password);
            // TestingRegistration( $email);

            registerUser($firstname, $lastname, $email, $gender, $designation, $department, $password);



            

            //     }


            // }

            //             $all_users = scandir("db/user/");
            //             $count_users = count($all_users);

            //               $user_id = $count_users - 1;

            //              date_default_timezone_set("Africa/Lagos");

            //             $register_time = date("h:i:sa");
            //             $register_date = date("Y-m-d");



            //     //putting user details into an array object for proper storage in the file system

            //           $userDetails = [

            //             'id' => $user_id,
            //             'reg_time' => $register_time,
            //             'reg_date' => $register_date,
            //             'logout_date' => "",
            //             'logout_time' => "",
            //             'firstname' => $firstname,
            //             'lastname' => $lastname,
            //             'email' => $email,
            //             'gender' => $gender,
            //             'designation' => $designation,
            //             'department' => $department,
            //             'password' => password_hash($password, PASSWORD_DEFAULT)

            //           ];

            //           $_SESSION['userDetails']= $userDetails;


            // //          //  $userExist= checkUser($email);

            // //     //checking to see if user already exist in the database before storage.

            // //     for ($counter = 0; $counter < $count_users; $counter++) {

            // //             $current_user = $all_users[$counter];

            // //             if ($current_user == $email . ".json") {

            // //                   $errors++ ;

            // //                  set_alert('email_error',  'user already exist');
            // //                  header('location: register.php');

            // //                 die();

            // //              }
            // //     }





            // file_put_contents("db/user/".$email.".json" , json_encode($userDetails));
           
           
            // set_alert('message',  'Registration Successful, you can now login');
            // header('location:  login.php');

}
}






// }
// else{

//   echo 'NO form have been submitted';
// }



 ?>
