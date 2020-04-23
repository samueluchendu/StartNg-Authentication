<?php session_start();

require_once('functions/alert.php');
require_once('functions/users.php');
require_once('functions/validation.php');




    $errors = 0;


if($_SERVER["REQUEST_METHOD"] == "POST"){

   validateEmail($email= $_POST['email']);
      // if(empty($_POST['email'])){

      //       $errors++;


      //       set_alert('email_error', 'Email is required');
      //       header('location: login.php');

      // }else{

      //        $email=$_POST['email'];

      //       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

      //           $errors++;


      //             set_alert('email_error', 'Email is invalid');
      //            header('location: login.php');
      //     }

      //     if (strlen($email) <= 5) {

      //           $errors++;


      //             set_alert('email_error',  'Email must not be less than 5');
      //             header('location: login.php');
      //     }

      //     if (!strpos($email, '.')) {

      //           $errors++;


      //             set_alert('email_error',  'Email must contain ' . ". " . 'symbol');
      //             header('location: login.php');

      //     }

      // }


      validatePassword($password = $_POST['password']);





      

      
      //         if (empty($_POST['password'])) {

      //               $errors++ ; 

                   
      //               set_alert('password_error',  'password is required');
      //               header('location: login.php');

      //      } else {

      //             $password=$_POST['password'];

      //             if (strlen($password) <= 7) {

      //                   $errors++ ;

                       
      //                   set_alert('password_error',  'password must atleast be 8 characters');
      //                   header('location: login.php');
      //             }

      //   } 



  if ($errors > 0) {
    
       'you have  errors';


  }else{

            userLogin($email, $password);

//         $all_users= scandir("db/user/");
//         $count_users = count($all_users);

//         date_default_timezone_set("Africa/Lagos");
//         $login_time =date("h:i:sa");
        
//         $login_date = date("Y-m-d");


//             for ($counter=0; $counter < $count_users ; $counter++) {

//                     $current_user = $all_users[$counter];
               

//         if ($current_user== $email.".json"){


//              $userContent= file_get_contents("db/user/".$email.".json");
//              $userContentObject= json_decode($userContent);

                  

//               $userPasswordFromDB = $userContentObject->password;

            
//               $user_password = password_verify($password , $userPasswordFromDB);


             
//               if($userPasswordFromDB == $user_password){
                 
//                 $userDetails=[
//                       'id' => $userContentObject->id,
//                       'reg_time'=> $userContentObject->reg_time,
//                       'reg_date'=> $userContentObject->reg_date,
//                       'logout_time' => $userContentObject->logout_time,
//                       'logout_date' => $userContentObject->logout_date,
//                       'login_time' => $login_time,
//                       'login_date' => $login_date,
//                       'firstname' => $userContentObject->firstname,
//                       'lastname' => $userContentObject->lastname,
//                       'email' => $userContentObject->email,
//                       'gender' => $userContentObject->gender,
//                       'designation' => $userContentObject->designation,
//                       'department' => $userContentObject->department,
//                       'password' => $userContentObject->password
//                  ];
                    
//                    $_SESSION['userDetails']=  $userDetails;

//                    header('location: dashboard.php');
//                    die();


//                  } else {

                      
//                        set_alert('email_error',  'Incorrect Email or Password');
//                         header('location: login.php'); 

//                    }


//                 if ($userContentObject->designation == "Admin") {

//                       $_SESSION['designation'] = 'Admin';
//                       header('location: Admin_dashboard.php');

//                 }


//                 if ($userContentObject->designation == "Staff") {

//                         $_SESSION['designation'] = 'Staff';
//                         header('location: staff_dashboard.php');

//                 } 

//                    die();
//          }
//        }
//           if($current_user !== $email . ".json"){

        
             
//               set_alert('email_error',  'Incorrect Email or Password');
//               header('location: login.php'); ///redirect to login if password or email is incorrect




//      }
    }
 }



            //checking user pa
