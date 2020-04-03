<?php
session_start();
////ERROR ARRAY;
$errors= array();

//Error Variables///////
// $first_nameErr=""; $genderErr=""; $last_nameErr=""; $emailErr="";
// $designationErr=""; $departmentErr=""; $passwordErr="";

//input variable///////
$firstname=""; $lastname=""; $gender=""; $dapartment=""; $email="";
$designation=""; $password="";

///checking validation/////////

if($_SERVER["REQUEST_METHOD"] == "POST"){

 ///Validation for name field//////
      if(empty($_POST['fname'])){
            $errors['firstname']= "";
            $_SESSION['firstname']='Name is required';
           header('location: register.php');



      }else{
        $firstname=$_POST['fname'];

        if(preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $firstname)){$errors['firstname1']='';$_SESSION['firstname1']='Numbers not required in name field'; header('location: register.php');}

        if(strlen($firstname) <= 2){echo $errors['firstname2']='';$_SESSION['firstname2']='Name must not be short'; header('location: register.php');}
        if(is_numeric($firstname )){echo $errors['firstname3']='';$_SESSION['firstname3']='Numbers not required in name field'; header('location: register.php');}
      }  //Name field validation ends here


      if(empty($_POST['lname'])){
         $errors['lastname']="";
         $_SESSION['lastname']='LastName is required';
         header('location: register.php');
      }else{
        $lastname=$_POST['lname'];

        if(preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $lastname)){$errors['lastname1']=''; $_SESSION['lastname1']='Numbers not required in lastname field';  header('location: register.php');}

        if(strlen($lastname) <= 2){$errors['lastname2']=''; $_SESSION['lastname2']='LastName must not be short'; header('location: register.php');}
        if(is_numeric($lastname )){$errors['lastname3']=''; $_SESSION['lastname3']='Numbers not required in lastname field'; header('location: register.php');}


      }  //Name field validation ends here


  //Validation for Gender field//////////
  if($_POST['gender'] == " "){
      $errors['gender']='';
    $_SESSION['gender']='Gender is required';
   header('location: register.php');
  }else{
    $gender=$_POST['gender'];

    }// End Validation for Gender field//////////


    //Validation for Department field//////////
      if(empty($_POST['department'])){
      echo $errors['department']="";
      $_SESSION['department']='department is required';
     header('location: register.php');
    }else{
      $department=$_POST['department'];

    }// End Validation for Department field//////////


    //Validation for Designation field//////////
      if($_POST['designation']==" "){
     $errors['designation']='';
      $_SESSION['designation']='designation is required';
     header('location: register.php');
    }else{
      $designation=$_POST['designation'];

    }// End Validation for Department field//////////

    //Validation for Password field//////////
      if(empty($_POST['password'])){
       $errors['password']='';
      $_SESSION['password']='password is required';
     header('location: register.php');
    }else{
      $password=$_POST['password'];
      if(strlen($password) <= 7){$errors['password1']=''."<br>"; $_SESSION['password1']='paasword must atleast be 8 characters';  header('location: register.php');}

    }// End Validation for Password field//////////





  //Validation for Email field//////////
  if(empty($_POST['email'])){
     $errors['email']='';
    $_SESSION['email']='email is required';
   header('location: register.php');
  }else{
    $email=$_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){$errors['email1']=''; $_SESSION['email1']='Email is invalid';  header('location: register.php');}

    if(strlen($email) <= 5){$errors['email2']=''; $_SESSION['email2']='Email must not be less than 5';  header('location: register.php');}

    if(!strpos($email, '.')){$errors['email3']=''; $_SESSION['email3']='Email must contain ' . ". " . 'symbol';  header('location: register.php');}
      }// End Validation for Email field//////////





//checking for errors and iserting into database;

if (count($errors) > 0) {
    // header('location: register.php');
   'you have  errors';
}else{

    echo 'success'. "<br>";
//counting users in the db/users folder adn auto incrementing user_id///
$all_users= scandir("db/user/");
$count_users = count($all_users);
$user_id = $count_users-1;

//putting user info into an array object for proper storage in the file system
    $data=[
          'id' => $user_id,
       'firstname' =>$firstname,
       'lastname' =>$lastname,
       'email' =>$email,
       'gender' =>$gender,
       'designation' =>$designation,
       'department' =>$department,
       'password' =>password_hash($password, PASSWORD_DEFAULT)
     ];

     $_SESSION['data']= $data;

     //checking to see if user already exist in the database before storage.

     for ($counter=0; $counter < $count_users ; $counter++) {
        $current_user = $all_users[$counter];

        if($current_user==$email.".json"){
          echo $errors['user1']='';
          $_SESSION['user1']='user already exist';
         header('location: register.php');
          die();
        }
     }

     file_put_contents("db/user/".$email.".json" , json_encode($data));
     header('location:  login.php');

}






}else{

  echo 'NO form have been submitted';
}



 ?>
