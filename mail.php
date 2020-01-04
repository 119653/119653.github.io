<?php
if(isset($_REQUEST['n1']))
{
$name=$_REQUEST['n1'];
$phone=$_REQUEST['n2'];
$email=$_REQUEST['n3'];
$website=$_REQUEST['n4'];


//echo $name,$phone,$email,$website;
//sending to mail

$to      = 'example@gmail.com';  //add your email id
$subject = 'Electrician-Consultant/Message';  // add mail subject


$message = "Name:".$name.
            "\nPhone:".$phone.
            "\nE-mail: ".$email.
             "\nMessage: ".$website;

$headers = "Reply-To: $email \r\n";

if(mail($to, $subject, $message,$headers))
{

    header("location:index.php?sent=1");

}

}


?>