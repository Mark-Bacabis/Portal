<?php
   session_start();
   include('../include/db.php');

   $empID = $_SESSION['empID'];

   if(isset($_POST['profileBtn']) && isset($_FILES['profile'])) {
      //print_r($_FILES['profile']);

      $img_name = $_FILES['profile']['name'];
      $img_size = $_FILES['profile']['size'];
      $img_tmp_name = $_FILES['profile']['tmp_name'];
      $img_error = $_FILES['profile']['error'];

      //echo $img_tmp_name;

      if($img_error === 0){ // check if error is equal to means there's selected file
         $extension = ['png', 'jpg', 'jpeg'];
         $img_ex = pathinfo($img_name, PATHINFO_EXTENSION); // fetch the extension of selected file
         $img_ex_lc = strtolower($img_ex); // transform the extension to lowercase character
         
         if(in_array($img_ex_lc, $extension)) { // check if the selected file contains 'png', 'jpeg', or 'jpg' extension
            $new_img_name = uniqid('sp', true).'.'.$img_ex_lc; // changing the name of selected file
            $img_upload_path = 'C:\xampp\htdocs\Portal\profile/'.$new_img_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);

            $updProfile = mysqli_query($profConn, "UPDATE `professor_account` SET `profile`= '$new_img_name' WHERE `emp_id` = '$empID' ");

            if($updProfile){
               echo "Update";
               header("location: ../Professor/editProfile.php");
            }
            else{
               echo "Error";
            }

         } else{
            $mess = "This is not an image";
            header("location:../Student/Settings.php?$mess");
         }
      }
      else{
         $mess = "No File Selected";
         header("location: ../Professor/editProfile.php?$mess");
      }
   }
   else{
      header("location: ../Professor/editProfile.php");
   } 
?>