<?php
   session_start();
   $empID = $_SESSION['empID'];

   include('../include/db.php');

   if(isset($_POST['section'])) { 
      $section = $_POST['section'];
      // SELECT ALL HANDLED SUBJECT
      $selSub = mysqli_query($profConn, "SELECT DISTINCT `subject` FROM `professor_section` WHERE `profID` = '$empID' AND `sectionName` = '$section' "); 
      
      if(mysqli_num_rows($selSub) > 0) { 
         while ($row = mysqli_fetch_assoc($selSub)) { ?>
         <option value="<?=$row['subject']?>"><?=$row['subject']?></option>
   <?php } 
      }
   }
/*
   $section = $_POST['section'];
   $subject = $_POST['subject'];

   // SELECT ALL INFO OF STUDENT
   $selStud = mysqli_query($enConn, "SELECT * FROM hrdb.tblemployees a
   JOIN professor_portal.professor_section b
   ON a.EMPLOYEEID = b.profID
   JOIN enrollment.student_sections c
   ON b.sectionName = c.sectionname
   JOIN enrollment.studentinfo d
   ON c.StudentID = d.StudentID
   WHERE b.profID = '$empID' AND b.sectionName = '$section' AND b.subject = '$subject'"); */
?>