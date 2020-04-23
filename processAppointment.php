<?php session_start();

require_once('functions/alert.php');
require_once('functions/appointment.php');

$errors = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {


        if (empty($_POST['fname'])) {

            $errors++;

           // $_SESSION['firstname_error'] = 'field is required';
            set_alert('firstname_error', 'field is required');
            header('location: bookAppointment.php');

        } else {
            
            $firstname = $_POST['fname'];

        }



        if (empty($_POST['lname'])) {

            $errors++;

           // $_SESSION['lastname_error'] = 'field is required';
            set_alert('lastname_error', 'field is required');
            header('location: bookAppointment.php');

        } else {

            $lastname = $_POST['lname'];

        }


        if ($_POST['department'] ==" ") {

            $errors++;

           // $_SESSION['department_error'] = 'field is required';
           set_alert('department_error', 'field is required');
            header('location: bookAppointment.php');

        } else {

            $department = $_POST['department'];

        }



        if (empty($_POST['NatureOfAppointment'])) {

            $errors++;

          //  $_SESSION['nature_error'] = 'field is required';
            set_alert('nature_error', 'field is required');
            header('location: bookAppointment.php');

        } else {

            $natureOfAppointment = $_POST['NatureOfAppointment'];

        }



        if ($_POST['dateOfAppointment']) {

             $dateOfAppointment = $_POST['dateOfAppointment'];

             $_SESSION['dateOfAppointment'] = $dateOfAppointment;

        }



        if ($_POST['timeOfAppointment']) {

               $timeOfAppointment = $_POST['timeOfAppointment'];

        }


        if ($_POST['complaint']) {

              $complaint = $_POST['complaint'];

        }



            if (empty($_POST['email'])) {

                    $errors++;

                   // $_SESSION['email_error'] = 'email is required';
                    set_alert('email_error', 'Email is required');
                    header('location: bookAppointment.php');


            } else {

                    $email = $_POST['email'];

                    $_SESSION['email'] = $email;

                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        $errors++;

                       // $_SESSION['email_error'] = 'Email is invalid';
                       set_alert('email_error', 'Email is invalid');
                        header('location: bookAppointment.php');

                }

                if (strlen($email) <= 5) {

                        $errors++;

                       // $_SESSION['email_error'] = 'Email must not be less than 5';
                        set_alert('email_error', 'Email must not be less than 5');
                        header('location: bookAppointment.php');
                }

                if (!strpos($email, '.')) {

                    $errors++;

                    //$_SESSION['email_error'] = 'Email must contain ' . ". " . 'symbol';
                    set_alert('email_error', 'Email must contain ' . ". " . 'symbol');
                    header('location: bookAppointment.php');
                }

            }




         //checking for errors and inserting into database;

            if ($errors > 0) {

                'you have  errors';
            } else {


        checkAppointment($complaint, $natureOfAppointment, $dateOfAppointment, $firstname, $lastname, $email, $timeOfAppointment, $department);
    }
}















        // $allAppointments = scandir("db/appointments/");
        // $countAppointment = count($allAppointments);

        // $appointment_id = $countAppointment - 1;

        // date_default_timezone_set("Africa/Lagos");
        // $register_time = date("h:i:sa");
        // $register_date = date("Y-m-d");



        // $appointmentDetails = [

        //     'id'                  =>     $appointment_id,
        //     'complaint'           =>     $complaint,
        //     'natureOfAppointment' =>     $natureOfAppointment,
        //     'dateOfAppointment'   =>     $dateOfAppointment,
        //     'firstname'           =>     $firstname,
        //     'lastname'            =>     $lastname,
        //     'email'               =>     $email,
        //     'timeOfAppointment'   =>     $timeOfAppointment,
        //     'department'          =>     $department,


        //                    ];

        // $_SESSION['appointmentDetails'] = $appointmentDetails;




        // for ($counter = 0; $counter < $countAppointment; $counter++) {

        //         $currentAppointment = $allAppointments[$counter];

        //         if ($currentAppointment == $email . "-" . $department . $dateOfAppointment . ".json") {

        //             $errors++;

        //             //$_SESSION['email_error'] = 'Appointment already exist';
        //             set_alert('email_error', 'Appointment already exist');
        //             header('location: bookAppointment.php');

        //             die();
        //         }
        //     }

        

        // file_put_contents("db/appointments/" . $email. "-" . $department. $dateOfAppointment.".json", json_encode($appointmentDetails));
        // $_SESSION['success'] = "Appointment booked successfully";

                    // saveAppointment($appointmentDetails);
                    // set_alert('message', 'Appointment booked successfully');
                    // header('location:  dashboard.php');



        







?>