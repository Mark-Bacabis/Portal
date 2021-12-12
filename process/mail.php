<?php
   session_start();

   use PHPMailer\PHPMailer\PHPMailer;

   //include('../include/db.php');
   require_once '../include/PHPMailer.php';
   require_once '../include/SMTP.php';
   require_once '../include/Exception.php';

   $email = $_SESSION['email'];     
   $lname = $_SESSION['lname'];
   $pass = $_SESSION['pass'];
   //echo "$email $lname $pass" ;


   // FUNCTION FOR SENDING A MESSAGE TO STUDENT'S EMAIL   
   // SERVER 
   $mail = new PHPMailer();
   $mail ->isSMTP();
   $mail ->isHTML(true);

   $mail ->Host = 'smtp.gmail.com';
   $mail ->SMTPAuth = true;
   $mail ->Username = 'qcu.online.portal@gmail.com';
   $mail ->Password = '123456789Abc!';
   $mail ->SMTPSecure = 'ssl';
   $mail ->Port = 465;

   // RECEPIENTS
   $mail ->Subject = 'QCU Professor Portal Account';
   $mail ->setFrom("qcu.online.portal@gmail.com", "Quezon City University Portal");
   $mail ->addAddress("$email");
   $mail ->Body = "<h2> Hello Mr/Mrs <span style='text-transform: capitalized'> $lname </span>, Thank you for signing up to Quezon City University Professor Portal </h2>";
   $mail ->Body .= "<p> Your email is your <b> Employee ID </b> and your password is: <b> $pass </b> </p>";

   $mail ->Send();

   $mail ->smtpClose();  

   
   if($mail){ 
      //header("location:../Professor/profLogin.php");
      echo "Email sent...";
   }
   else{
      echo "Error!".$mail->ErrorInfo;
   }
?>