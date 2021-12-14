<?php
   session_start();
   $empID = $_SESSION['empID'];

   include('../include/db.php');

   echo $_POST['sections'];
?>
