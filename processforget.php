    <?php session_start();

    require_once('functions/alert.php');
    require_once('functions/users.php');
    require_once('functions/email.php');



    $errors= array();    //input variable///////
    

  

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Validation for Email field//////////
    if(empty($_POST['email'])){

        $errors++;
        
        set_alert('error', 'email is required');
        header('location: forget.php');
        
    }else{
            $token= uniqid(true); 
            $email = $_POST['email'];

            $all_users = scandir("db/user/");
            $count_users = count($all_users);

            for ($counter = 0; $counter < $count_users; $counter++) {
                $current_user = $all_users[$counter];
                  // $userExist = checkUser($email);

                if ($current_user == $email . ".json" ) {

                   
                    
                   
                    $subject = "Password Reset link";
                    $message = "password reset was initited, kindly ignore if it was not initiated by you otherwise, visit:localhost:8080/startng/authentication/reset.php?token=".$token;
                    // $headers = "From: no-reply@smh.com" . "\r\n" .
                    //     "CC: samueluchendu47@gmail.com";
                  
                    file_put_contents("db/tokens/" . $email . ".json", json_encode(['token' => $token]));
             
                   $mail= sendMail($subject,$message,$email);

                    //  $mail=  mail($email, $subject, $message, $headers);

                              
                    if($mail){
                        
                       
                        set_alert('message', 'password reset link has been sent');
                        header('location: login.php');
                         die();

                    }else{

                        $errors++;
                       
                        set_alert('error', 'Email was not sent');
                        header('location: forget.php');
                    }

                                       
                      die();

                  




    }
   

}
            
            $errors++;
           
            set_alert('error', 'email dont match');
            header('location: forget.php');


}
}