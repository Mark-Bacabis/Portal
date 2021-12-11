<?php
   session_start();
   include('../include/db.php');
   $empID = $_SESSION['empID'];

   $studID = $_POST['studID'];
   $grades = $_POST['grade'];
   $action = $_POST['action'];
   $section = $_POST['section'];
   $subject = $_POST['subject'];

   $remarks = '';

   foreach($studID as $i => $students){

      if($action[$i] == 'INC'){
         $grades[$i] = 'INC';
         $remarks = "INC";
      }
      else if($action[$i] == 'DROP'){
         $grades[$i] = 'DROP';
         $remarks = "Failed";
      }
      else{
         if($grades[$i] >= 75 && $grades[$i] <= 100){
            $remarks = "PASSED";
         }
         else if($grades[$i] <= 74 && $grades[$i] > 0){
            $remarks = "FAILED";
         }   
      }
     
      //echo "$empID $section $subject $students: ".$grades[$i]." ".$action[$i]." $remarks <br>";
      
      $insQry = "INSERT INTO `grade`
      (`emp_id`, `section`, `stud_id`, `subject`, `grade`, `action`, `remarks`)
      VALUES 
      ('$empID', '$section', '$students', '$subject', '".$grades[$i]."', '".$action[$i]."', '$remarks')";

      $ins = mysqli_query($profConn, $insQry);
   }

   if($ins){
      header('location:../Professor/grade.php');
   } 

?>

