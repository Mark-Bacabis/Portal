<?php
    $hrConnection = mysqli_connect('localhost', 'root', '', 'hr1');

    if(!$hrConnection){
        error_log($hrConnection);
    }
?>