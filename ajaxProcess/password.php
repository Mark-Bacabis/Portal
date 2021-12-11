<?php

   if(isset($_POST['newPass'])){
      $newpass = $_POST['newPass'];
      $newPass_len = strlen($newpass);

      if($newPass_len < 8){
         echo "8 to 16 Characters";
      }
   }
   
   if(isset($_POST['conPass'])) {
      $newPass = $_POST['newPassword'];
      $confirmPassword = $_POST['conPass'];

      if($newPass === $confirmPassword){
         echo "<span class='success'> Password match </span>";
      }
      else{
         echo "<span class='danger'> Password not match </span>";
      }
      
   }

?>