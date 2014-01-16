<?php
   include_once("Google_Spreadsheet.php");

   $user = 'uwvsa.info@gmail.com';
   $pass = '********';

   $ss = new Google_Spreadsheet($user, $pass);
   $ss->useWorksheet("Sheet1");
   $ss->useSpreadsheet("UW VSA Sign Up Sheet W2014");

   $submitted = $_POST['submitted'];

   if ($submitted == 1) {
   echo "submitted form";
	 $timestamp = date("m-d-y H:i:s",time());
echo $timestamp;
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
	  $studentid = $_POST['studentid'];
	  $email = $_POST['email'];
	  $suggest = $_POST['suggest'];

      // Do some error checking here if you want
      if (!$email) {
         echo "<h3><font color='red'>*Email Address is required</font></h3>";
      } else {
         // No errors, continue processing registration
echo "no errors so far";
         $row = array (
			"Timestamp" => $timestamp
            , "First Name" => $firstname
            , "Last Name" => $lastname
			, "Student ID" => $studentid
            , "E-mail" => $email
			, "Suggest an Event!" => $suggest
         );
echo "to doc heading";

         if ($ss->addRow($row)) {
            // Display success page here

            echo "<h1>Thanks for registering!</h1>";
			header('Location: thankyou.php');

            // Send a confirmation email here if you want
         } else {
            // Failed to write to the spreadsheet
            echo "<h1>Sorry there was an error processing your request.</h1>";
         }
      }
   }
?>
