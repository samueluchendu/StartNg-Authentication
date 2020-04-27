<?php session_start();

require_once('functions/alert.php');
require_once('functions/users.php');


if (!adminLogin()) {

        header('location: login.php');
}



$allPatient = scandir("db/user/");


        for($counter = 2; $counter < count($allPatient); $counter++){

                $currentPatient= $allPatient[$counter];

                $patientContent = file_get_contents("db/user/" . $currentPatient);

                $patientContentObject = json_decode($patientContent);

  
                $patientDesignationFromDB = $patientContentObject->designation;

                $patientFirstNameFromDB = $patientContentObject->firstname;
                $patientLastNameFromDB = $patientContentObject->lastname;

            
                       if ($patientDesignationFromDB == "Patient"){

                        echo "my depatartment is" . " " . $patientFirstNameFromDB . "<br>";

                       }
            
            }
