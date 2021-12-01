<?php
   session_start();

   include('db.php');
   $studentID = $_SESSION['studID'];

   if(empty($studentID)){
      header("location: ../index.php");
   }

   // SELECT QUERIES
   // student
   $studentQry = mysqli_query($conn, 'SELECT * FROM student WHERE Student_ID = "'.$studentID.'"');
   $student = mysqli_fetch_assoc($studentQry);

   // student_account
   $accountQry = mysqli_query($conn, 'SELECT * FROM student_account WHERE Student_ID = "'.$studentID.'"');
   $studentAcc = mysqli_fetch_assoc($accountQry);

   // student_status
   $statusQry = mysqli_query($conn, 'SELECT * FROM student_status WHERE Student_ID = "'.$studentID.'"');
   $studentStats = mysqli_fetch_assoc($statusQry);
   $course = $studentStats['Course'];

   // course
   $courseQry = mysqli_query($conn, 'SELECT * FROM courses WHERE Code = "'.$course.'"');
   $courses = mysqli_fetch_assoc($courseQry);

   //contact
   $contactQry = mysqli_query($conn, 'SELECT * FROM stud_contact WHERE Student_ID = "'.$studentID.'"');
   $studContact = mysqli_fetch_assoc($contactQry);

   // emergency
   $emergencyQry = mysqli_query($conn, 'SELECT * FROM emergency WHERE Student_ID = "'.$studentID.'"');
   $studEmergency = mysqli_fetch_assoc($emergencyQry);


?>