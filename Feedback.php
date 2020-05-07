

<?php
  $email = $_POST ['email'];
  $message = $_POST ['message'];

  $email_from = 'Electra Game Website';
  $email_subject = 'New Message From Game Website'
  $email_body =
                "Email: $email.\n".
                "Message: $message.\n";

  $to = "pyramidescapekth@gmail.com";
  $headers = "From: $email_from\r\n";
  $headers .= "Reply-to: $email\r\n"

  mail($to,$email_subject,$email_body,$headers);

  header("location: feedback.html");
?>
