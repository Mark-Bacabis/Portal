<?php
    include('../includeDB/profDB.php');

    $dateNow = date("m-d-y");
    echo $dateNow;

    if(isset($_POST['announceBtn'])){
        $announce = $_POST['announcement'];

        $ins = mysqli_query($profConnection, 'INSERT INTO `announce` (`announcement`, `date`) VALUES ("'.$announce.'", "'.$dateNow.'")');

        if($ins){
            header("location:../Professor/profAnnouncement.php?Inserted Successfuly");
        }
        else{
            echo error_log($profConnection);
        }
        
    }

?>