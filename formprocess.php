<?php
session_start();
require_once 'libs/phpmailer/PHPMailerAutoload.php';

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
        $m=new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth=true;
        $m->Host='smtp.gmail.com';
        $m->Username='idnarosirrah@gmail.com';//replace by your email address
        $m->Password='stjago20136a1';//replace with your password
        $m->SMTPSecure='ssl';
        $m->Port=465;

        $m->isHTML();
        $m->Subject =''. $fields['subject'];
        $m->Body='From:'.$fields['name'].'('.$fields['email'].')<p>'.$fields['message'].'</p>';

        $m->FromName=''.$fields['name'];
        $m->AddAddress('idnarosirrah@gmail.com',' '.$fields['name']);
        //Testing for valid email
        if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
        {
            //Email sent
            if ($m->send()) 
            {
                header('Location:ContactUs.php');
                die();
            }
            else
            {
                $errors[]="Sorry ,Could not send email.Try again later.";
            }            
        }
        
    }
}else{
    $errors[]= 'Something went wrong';
}
$_SESSION['errors']=$errors;
$_SESSION['fields']=$fields;
header ('Location:ContactUs.php');


// Function for filtering input values.

function test_input($data)
{
$data = trim($data);
$data =stripslashes($data);
$data =htmlspecialchars($data);
return $data;
}

?>