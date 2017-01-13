<?php
/*
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$subject = $_POST["subject"];
 
$EmailTo = "idnarosirrah@gmail.com";
$Subject = "New Message Received";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Subject: ";
$Body .= $subject;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";


 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
*/

if(isset($_POST['submit']))
{
    $msg = 'Name: ' .$_POST['name'] ."\n" .
        'Email: ' .$_POST['email'] ."\n" . 'Subject: ' .$_POST['subject'] ."\n"
        'Message: ' . "\n" .$_POST['comment'];
    mail('idnarosirrah@gmail.com','Sample',$msg);
} 
else
{
    exit(0);
}

?>