<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];
    $email_from='svmutheshamahmed@gmail.com';
    $email_subject="New form submission";
    $email_body="username:$name.\n"."user email:$visitor_email.\n"."user message: $message.\n";
    $to="svmohteshamahmed@yahoo.in";
    $headers="from:$email_from\r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("location:index.html");
