<?php
   include_once("Google_Spreadsheet.php");

   $user = 'uwvsa.info@gmail.com';
   $pass = '********';

   $ss = new Google_Spreadsheet($user, $pass);
   $ss->useWorksheet("Sheet1");
   $ss->useSpreadsheet("UW VSA Sign Up Sheet W2014");

   $submitted = $_POST['submitted'];

   if ($submitted == 1) {
	  $timestamp = date("m-d-y H:i:s");
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
	  $studentid = $_POST['studentid'];
	  $email = $_POST['email'];
	  $suggest = $_POST['suggest'];

      // Do some error checking here if you want
      if (!$firstname) {
         echo "Error: First Name is required";
      } else if (!$lastname) {
         echo "Error: Last Name is required";
      } else if (!$studentid) {
         echo "Error: Student ID is required";
      } else if (!$email) {
         echo "Error: Email Address is required";
	  } else {
         // No errors, continue processing registration
         $row = array (
			"Timestamp" => $timestamp
            , "First Name" => $firstname
            , "Last Name" => $lastname
			, "Student ID" => $studentid
            , "E-mail" => $email
			, "Suggest an Event!" => $suggest
         );

         if ($ss->addRow($row)) {
            // Display success page here
			header('Location: thankyou.php');

            // Send a confirmation email here if you want
         } else {
            // Failed to write to the spreadsheet
            echo "<h1>Sorry. there was an error processing your request.</h1>";
         }
      }
   }
?>
