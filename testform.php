<?php
  $myemail = "twaelbroeck@gmail.com";
  $subject = "Form Submitted";
  $numErr = "";
  $cleaned_name = clean_input($_POST['name']);
  $cleaned_email = clean_input($_POST['email']);

  // First cleans input, then replaces any non-numerics with nothing
  $cleaned_number = preg_replace('/[^\d]/', '', clean_input($_POST['number']));

  $cleaned_comments = clean_input($_POST['comments']);
  $feedback = "";

/////////////////////////////////////////////////////////////////////////////
//                          Form input validation
/////////////////////////////////////////////////////////////////////////////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($cleaned_name)) {
    $nameErr = "Name is required";
    $feedback = "";
  } else {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$cleaned_name)) {
      $nameErr = "Only letters and white space allowed";
      $feedback = "";
    } else {
      $nameErr = "";
    }
  }

  if (empty($cleaned_number)) {
    // number isn't required so it's ok if it's empty
  } else {
      // check if number only contains 10 numbers
      if(preg_match('^[0-9]^',$cleaned_number)) {
        $numErr = "";
      } else {
        $numErr = "Invalid ". $cleaned_number;
        $feedback = "";
      }
    }

  if (empty($cleaned_comments)) {
    $commentsErr = "Message is required";
    $feedback = "";
  } else {
    $commentsErr = "";
  }
} // End input validation

/////////////////////////////////////////////////////////////////////////////
//                          Assign info to message
/////////////////////////////////////////////////////////////////////////////
  $message  = <<<EMAIL

Name:   $cleaned_name
Email:  $cleaned_email
Number: $cleaned_number

Message:

$cleaned_comments

EMAIL;

/////////////////////////////////////////////////////////////////////////////
//                       Successful form submission
// Neither (name and nameErr) nor (comments and commentsErr) could possibly
// be empty strings. This prevents the form from being submitted as soon as
// the page is loaded. It also clears all fields when the form is successful.
// All field contents will remain until form is successfully submitted.
/////////////////////////////////////////////////////////////////////////////
if($commentsErr == "" && $nameErr == "" && $cleaned_name != "" && $cleaned_comments != ""){
  mail($myemail,$subject,$message);
  $feedback = "Thanks for contacting us ! We'll be in touch soon.";
  $_POST['name'] = "";
  $_POST['email'] = "";
  $_POST['number'] = "";
  $_POST['comments'] = "";
}

// Function strips any dangerous characters from input
function clean_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>