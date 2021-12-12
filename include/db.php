<?php 
   $enConn = mysqli_connect('localhost', 'root', '', 'enrollment');
   $profConn = mysqli_connect('localhost', 'root', '', 'professor_portal');

   if(!$profConn){
      error_log($profConn);
   }
   else if(!$enConn){
      error_log($enConn);
   }
   else if( !$profConn){
      error_log($profConn);
   }

?>