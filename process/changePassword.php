<?php
   session_start();
   include('../include/db.php');

   $empID = $_SESSION['empID'];

   $selProf = mysqli_query($profConn, "SELECT * FROM `professor_account` WHERE `emp_id` = '$empID' ");
   $profAccount = mysqli_fetch_assoc($selProf);


   if(isset($_POST['updateBtn'])){
      $profPassword = $profAccount['password'];      
      $currentPass = $_POST['curPass'];
      $newPassword = $_POST['newPass'];
      $confirmPass = $_POST['conPass'];

      //echo "$empID $currentPass $newPassword $confirmPass <br> $profPassword ";   

      if($currentPass === $profPassword) {
         if($newPassword === $profPassword){
            $_SESSION['message'] = "<div class='danger-message'> Don't use old password! </div>";
            header('location: ../Professor/editProfile.php');
         }
         else{
            if($newPassword === $confirmPass) {
               // QUERY HERE...
            $updPass = mysqli_query($profConn, "UPDATE `professor_account` SET `password` = '$newPassword' WHERE `emp_id` = '$empID' ");

            if($updPass){
               $_SESSION['message'] = "<div class='success-message'> Password updated. </div>";
               header('location: ../Professor/editProfile.php');
            }

            } else{
               $_SESSION['message'] = "<div class='danger-message'> Password does not match! </div>";
               header('location: ../Professor/editProfile.php');
            }
         }
      } else {
         $_SESSION['message'] = "<div class='danger-message'> Wrong password! </div>";
         header('location: ../Professor/editProfile.php');
      }
   }
?>