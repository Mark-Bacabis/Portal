<?php
   session_start();
   include('../include/db.php');
   $empID = $_SESSION['empID'];

   // SELECT ALL INFO OF STUDENT
   $selStud = mysqli_query($enConn, "SELECT * FROM hrdb.tblemployees a
   JOIN professor_portal.professor_section b
   ON a.EMPLOYEEID = b.profID
   JOIN enrollment.student_sections c
   ON b.sectionName = c.sectionname
   JOIN enrollment.studentinfo d
   ON c.StudentID = d.StudentID
   WHERE b.profID = '$empID' AND b.sectionName = 'SBIT-1A'");

   $studGrade = mysqli_fetch_assoc($selStud);

   $grades = $_POST['grade'];
   $action = $_POST['action'];
   
   $section = $studGrade['sectionName'];
   $studID = $studGrade['StudentID'];
   echo $studGrade['sectionName'];



  

   foreach($grades as $i => $grade){
      //echo "$grade - ". $action[$i]."<br>";

      $insGrade = "INSERT INTO `grade`
      (`emp_id`, `section`, `stud_id`, `subject`, `grade`, `action`, `remarks`) 
      VALUES 
      ('$empID','$section','$studID','','$grade', '".$action[$i]."', '".$action[$i]."')";

      $ins = mysqli_query($profConn, $insGrade);

      if($ins){
         echo "Inserted";
      }
      else{
         echo "ERROR";
      }
   }



?>