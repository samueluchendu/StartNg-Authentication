<?php session_start();
require_once('functions/users.php');


      // date_default_timezone_set("Africa/Lagos");

      // $last_login_time =date("h:i:sa");
      // $last_login_date = date("Y-m-d");


      $email=$_SESSION['userDetails']['email'];

           





      $all_users= scandir("db/user/");
      $count_users = count($all_users);

      date_default_timezone_set("Africa/Lagos");


      $login_time =date("h:i:sa");
      $login_date = date("Y-m-d");




userLogout($email);


//       for ($counter=0; $counter < $count_users ; $counter++) {
//          $current_user = $all_users[$counter];


//         if($current_user == $email . ".json"){

//   //checking user password from the jason content in the get_included_files
//         $userContent= file_get_contents("db/user/".$email.".json");

  
//           $userContentObject = json_decode($userContent);

       



            
//             $userContentObject->logout_date= $last_login_date;
//             $userContentObject->logout_time=$last_login_time;

//            unlink("db/user/".$email.".json");
         
//           file_put_contents("db/user/".$email.".json" , json_encode($userContentObject));

//           }

//        }

//              session_destroy();
             header('location: login.php');







?>
