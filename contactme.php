<?php   
   

    $name = $_POST["name"];
    $phone = $_POST['phone'];
    $email = $_POST["email"];
    $message = $_POST["message"];


    $mailheader = "From:".$name."<.$email.">\r\n";
    
    $recipient = "isaacotienp212590@daystar.ac.ke";
    
    mail($recipient, $phone, $message, $mailheader)
    or die("Error!");
    
    echo"THANK YOU FOR CONTACTING IT COMPANY AND AGENCY | WELCOME...";


?>
