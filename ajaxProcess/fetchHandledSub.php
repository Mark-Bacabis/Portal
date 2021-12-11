<?php
   session_start();
   $empID = $_SESSION['empID'];

   include('../include/db.php');

   echo $_POST['sections'];
  /* if(isset($_POST['section'])) { 
      $section = $_POST['section'];

      // SELECT ALL HANDLED SUBJECT
      $selSub = mysqli_query($profConn, "SELECT DISTINCT `subject` FROM `professor_section` WHERE `profID` = '$empID' AND `sectionName` = '$section' "); 
      
      if(mysqli_num_rows($selSub) > 0) { 
         while ($row = mysqli_fetch_assoc($selSub)) { ?>
         <option value="<?=$row['subject']?>"> <?=$row['subject']?> </option>
   <?php } 
      }
   }*/
?>
