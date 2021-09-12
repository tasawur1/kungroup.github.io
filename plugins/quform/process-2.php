<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST = ['message'];

    $email_form = 'Tasawur.imam1@gmail.com';

    $email_subject = "New Enquiry From Website";

    $email_body = "User name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User message: $message.\n";

    $to = "tasawur.imam1@outlook.com";

    $headers = "From: $email_form" \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>