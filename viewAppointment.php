<?php session_start();

require_once('functions/alert.php');
require_once('functions/users.php');


if (!staffLogin()) {

    header('location: login.php');
}





                      $staffDepartment =$_SESSION['userDetails']['department'];

                      $allAppointments = scandir("db/appointments/");

                      print_r($allAppointments);
                      die();

if(count($allAppointments) >= 1){

         for($counter = 2; $counter < count($allAppointments); $counter++){

                $currentAppointments= $allAppointments[$counter];

                $Appointmentcontent = file_get_contents("db/appointments/" . $currentAppointments);

                $AppointmentcontentObject = json_decode($Appointmentcontent);


                $patientDepartmentFromDB = $AppointmentcontentObject->department;
                $patientFirstNameFromDB = $AppointmentcontentObject->firstname;
                $patientLastNameFromDB = $AppointmentcontentObject->lastname;


                $patientDateOfAppointmentFromDB = $AppointmentcontentObject->dateOfAppointment;
                $patientNatureOfAppointmentFromDB = $AppointmentcontentObject->natureOfAppointment;
                $patientComplaintFromDB = $AppointmentcontentObject->complaint;

               if($patientDepartmentFromDB == $staffDepartment){

                    echo "my firstname is" . " " . $patientFirstNameFromDB . "<br>";
                    echo "my depatartment is" . " " . $patientDepartmentFromDB . "<br>";

            }

         }

       }else{
               echo "No Appointment";

       }
































?>
