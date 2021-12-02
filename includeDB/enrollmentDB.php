<?php
    $enrollConnect = mysqli_connect('localhost', 'root', '', 'enrollment');

    if(!$enrollConnect){
        error_log($enrollConnect);
    }
?>