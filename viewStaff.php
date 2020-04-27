<?php session_start();

require_once('functions/alert.php');
require_once('functions/users.php');


if (!adminLogin()) {

    header('location: login.php');
}




        $allStaff = scandir("db/user/");


    for ($counter = 2; $counter < count($allStaff); $counter++) {

        $currentStaff = $allStaff[$counter];

        $staffContent = file_get_contents("db/user/" . $currentStaff);

        $staffContentObject = json_decode($staffContent);


        $staffDesignationFromDB = $staffContentObject->designation;

        $staffFirstNameFromDB = $staffContentObject->firstname;
        $staffLastNameFromDB = $staffContentObject->lastname;


        if ($staffDesignationFromDB == "Staff") {

            echo "my depatartment is" . " " . $staffFirstNameFromDB . "<br>";
        }
    }

    
