<?php
    $hrConnection = mysqli_connect('localhost', 'root', '', 'hr');

    if(!$hrConnection){
        error_log($hrConnection);
    }
?>