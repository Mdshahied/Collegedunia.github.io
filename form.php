<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$emailid = $_POST['emailid'];
$message = $_POST['message'];

mail(to,subject,body,header)


$from = 'forms.infysolution.com'
$to = 'shahiedali198@gmail.com';
$body = "First Name: $fname.\n".
        "Last Name : $lanem.\n".
        "Mail Id: $mail.\n".
        "Message: $message.\n";
$header = "From :".$from.
          "Reply-To :".$email;

mail($to,$subject,$body,$headers);
header("Location:contact.html");






?>