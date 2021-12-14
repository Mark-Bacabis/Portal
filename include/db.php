<?php 
   $enConn = mysqli_connect('localhost', 'root', '', 'enrollment');
   $profConn = mysqli_connect('localhost', 'root', '', 'professor_portal');
   $hrConn = mysqli_connect('localhost', 'root', '', 'hrdb');

   if(!$profConn){
      error_log($profConn);
   }
   else if(!$enConn){
      error_log($enConn);
   }
   else if( !$hrConn){
      error_log($hrConn);
   }

?>