<?php   
   

    $name = $_POST["name"];
    $phone = $_POST['phone'];
    $email = $_POST["email"];
    $message = $_POST["message"];


    $mailheader = "From:".$name."<.$email.">\r\n";
    
    $recipient = "isaacomondi904@gmail.com";
    
    mail($recipient, $phone, $message, $mailheader)
    or die("Error!");
    
    echo"message sent we will get back to you soon.THANK YOU";


?>
