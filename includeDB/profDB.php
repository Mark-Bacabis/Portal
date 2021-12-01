
<?php
    $profConnection = mysqli_connect('localhost', 'root', '', 'professor_portal');

    if(!$profConnection){
        error_log($profConnection);
    }
?>