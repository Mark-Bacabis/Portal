<?php 
   $hrConn = mysqli_connect('localhost', 'root', '', 'hrdb');
   $enConn = mysqli_connect('localhost', 'root', '', 'enrollment');
   $profConn = mysqli_connect('localhost', 'root', '', 'professor_portal');

   if(!$hrConn){
      error_log($hrConn);
   }
   else if(!$enConn){
      error_log($enConn);
   }
   else if( !$profConn){
      error_log($profConn);
   }

?>