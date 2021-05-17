<?php 
    $name = $_POST['name'];
    $visitors_email = $_POST['email'];
    $messge = $_POST['message'];

    $email_from = "trishitamitra1983@gmail.com";
    
    $email_subject = "New form Submission";

    $email_body = "User Name:  $name.\n".
                   "User Email: $visitors_email.\n".
                   "User Message: $messge.\n";
    

    $to = "animeshmitra003@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply to: $visiors_email \r\n";

    mail($to,$email_subject,$messge);
    
    header("Location: index.html");
    
?>