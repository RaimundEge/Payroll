<?php
 require_once "Mail.php";
 
 $from = "Sandra Sender <z151623@students.niu.edu>";
 $to = "Ramona Recipient <raimund@ege.com>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "smtp.office365.com";
 $username = "z151623@students.niu.edu";
 $password = "**********";
 $port = 587;
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true, 'port' => $port,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
?>
