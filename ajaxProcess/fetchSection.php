<?php
   session_start();
   $empID = $_SESSION['empID'];

   include('../include/db.php');

   if(isset($_POST['subject'])) { 
      $subject = $_POST['subject'];
      // SELECT ALL HANDLED SUBJECT
      $selSec = mysqli_query($profConn, "SELECT DISTINCT `sectionName` FROM `professor_section` WHERE `profID` = '$empID' AND `subject` = '$subject' "); 
      
      if(mysqli_num_rows($selSec) > 0) { 
         while ($row = mysqli_fetch_assoc($selSec)) { ?>
         <option value="<?=$row['sectionName']?>"><?=$row['sectionName']?></option>
   <?php } 
      }
   }
?>

