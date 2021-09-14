<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    
    $email_from = 'edithpau_benvenuto@hotmail.com';
    $email_subject = "Webpage comments";
    $email_body = "User name: $name.\n".
                    "User Email: $email.\n".
                        "Comments: $comments.\n";
    
    $to = "edithpau_benvenuto@hotmail.com";
    $headers = "From: $email_from\r\n";
    $headers.= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>