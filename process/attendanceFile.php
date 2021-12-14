<?php
   session_start();
   include('../include/db.php');
   $empID = $_SESSION['empID'];

   if(isset($_POST['attendanceBtn'])){
      $section = $_POST['section'];
      $subject = $_POST['subject'];

      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_tmp_name = $_FILES['file']['tmp_name'];
      $file_error = $_FILES['file']['error'];
      
      //print_r($file);

      if($file_error === 0){ // check if error is equal to means there's selected file
         $extension = ['pdf', 'xlsx', 'docx', 'PDF', 'XLSX', 'DOCX'];
         $file_ex = pathinfo($file_name, PATHINFO_EXTENSION); // fetch the extension of selected file
         $file_ex_lc = strtolower($file_ex); // transform the extension to lowercase character
         
         if(in_array($file_ex_lc, $extension)) { // check if the selected file contains 'png', 'jpeg', or 'jpg' extension
            
            $file_upload_path = 'D:\xampp\htdocs\Portal\files/'.$file_name;
            move_uploaded_file($file_tmp_name, $file_upload_path);

            //echo "$empID $section $subject $file_name";
            $ins = mysqli_query($profConn, "INSERT INTO `attendance`
            (`emp_id`, `section`, `subject`, `file_name`) 
            VALUES 
            ('$empID', '$section', '$subject', '$file_name')");

            if($ins){
               echo "Success";
               header('location: ../Professor/attendance.php');
            }else{
               echo "Error";
            }
            
         } else{
            header('location: ../Professor/attendance.php');
         }
      }
   }
   else{
      header('location: ../Professor/attendance.php');
   }
?>