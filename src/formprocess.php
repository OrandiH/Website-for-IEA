<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$errors =[];

$name ="";
$email = "";
$name = test_input($_POST['name']);
$email = test_input($_POST['email']);


if(isset($_POST['name'],$_POST['email'],$_POST['message'],$_POST['subject']))
{
    $fields=[
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'message'=>$_POST['message'],
        'subject'=>$_POST['subject']
    ];
    foreach($fields as $field=>$data){
        if(empty($data)){
            $errors[]='The '.$field . ' field is required.';
        }
    }
    //Testing for valid name
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
    {
        $errors[] = "Only letters and white space allowed";
    }
    
    if(empty($errors)){
        $m=new PHPMailer(true);
        $m->isSMTP();
        $m->SMTPAuth=true;
        $m->Host='smtp.gmail.com';
        $m->Username='testingharris2018@gmail.com';//replace by your email address
        $m->Password='utech2018';//replace with your password
        $m->SMTPSecure='ssl';
        $m->Port=465;

        $m->setFrom(''.$fields['email']);
        $m->addAddress('testingharris2018@gmail.com'); //This is the recipient address

        $m->isHTML();
        $m->Subject =''. $fields['subject'];
        $m->Body='From:'.$fields['name'].'('.$fields['email'].')<p>'.$fields['message'].'</p>';

        //Testing for valid email
        if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
        {
            //Email sent
            if ($m->send()) 
            {
                header('Location:ConfirmEmail.html');
            }
            else
            {
                $errors[]="Sorry ,Could not send email.Try again later.";
                echo $m->ErrorInfo;
            }            
            die();
        }
        
    }

}else{
    $errors[]= 'Something went wrong';
}
$_SESSION['errors']=$errors;
$_SESSION['fields']=$fields;
header("Refresh:5; url:ContactUs.php");


// Function for filtering input values.

function test_input($data)
{
$data = trim($data);
$data =stripslashes($data);
$data =htmlspecialchars($data);
return $data;
}

?>

