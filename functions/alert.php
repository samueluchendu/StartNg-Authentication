<?php

    function set_alert($type= "error", $content=''){

     switch($type) {

        case 'error':
            $_SESSION['error'] = $content;
            break;

        case 'nature_error':
            $_SESSION['nature_error'] = $content;
            break;

        case 'complaint_error':
            $_SESSION['complaint_error'] = $content;
            break;

        case 'message':
         $_SESSION['message'] = $content ;
            break;

        case 'firstname_error':
            $_SESSION['firstname_error'] = $content;
            break;

        case 'lastname_error':
            $_SESSION['lastname_error'] = $content;
            break;

        case 'gender_error':
            $_SESSION['gender_error'] = $content;
            break;

        case 'designation_error':
            $_SESSION['designation_error'] = $content;
            break;

        case 'password_error':
            $_SESSION['password_error'] = $content;
            break;

        case 'email_error':
            $_SESSION['email_error'] = $content;
            break;

        default:
            $_SESSION['error'] = $content;
            break;


    }
         
            
   }


   function print_error($type){

           if( isset($_SESSION[$type]) &&  !empty($_SESSION[$type]) ){

            echo "<span style='color:red';>" . $_SESSION[$type] . "</span><br>";
            unset($_SESSION[$type]);

         }
  

   }




  


?>
