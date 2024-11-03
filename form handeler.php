<?php 
    $name= $_POST['name'];
    $visitor_email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $email_from="info@gmail.com";
    $email_subject='Hello i am sifat';
    $email_body=" User name:$name.\n".
                " User Email:$visitor_email.\n".
                " Subject:$subject.\n".
                " User Message:$message.\n";
    
    $to ='neyamotu413@gmail.com';

    $header="From: $email_from \r\n";
    $header .="Reply to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$header);
    header("Location:contact.html");

?>