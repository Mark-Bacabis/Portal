<?php
   session_start();
   //include('../include/db.php');
   require '../include/PHPMailer.php';
   require '../include/SMTP.php';
   require '../include/Exception.php';
      
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   use PHPMailer\PHPMailer\SMTP;


   $email = $_SESSION['email'];     
   $lname = $_SESSION['lname'];
   $pass = $_SESSION['pass'];
   echo "$email $lname $pass" ;


   // FUNCTION FOR SENDING A MESSAGE TO STUDENT'S EMAIL   
   // SERVER 
   $mail = new PHPMailer();
   $mail -> isSMTP();
   $mail ->isHTML(true);
   $mail -> Host = 'smtp.gmail.com';
   $mail -> SMTPAuth = 'true';
   $mail ->Username = 'isca5027@gmail.com';
   $mail ->Password = '09085466258isca';
   $mail -> SMTPSecure = 'tls';
   $mail -> Port = '587';

   // RECEPIENTS
   $mail ->Subject = 'QCU Professor Portal Account';
   $mail ->setFrom("isca5027@gmail.com", "Quezon City University Portal");
   $mail ->addAddress("$email");
   $mail ->Body = "<h2> Hello Mr/Mrs <span style='text-transform: capitalized'> $lname </span>, Thank you for signing up to Quezon City University Professor Portal </h2>";
   $mail ->Body .= "<p> Your email is your <b> Employee ID </b> and your password is: <b> $pass </b> </p>";
 
   $mail ->Send();

   if($mail){
      header("location:../Professor/profLogin.php");
      //echo "Email sent...";
   }
   else{
      echo "Error!";
   }

   $mail ->smtpClose();  
?>