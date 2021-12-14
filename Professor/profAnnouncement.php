<?php
    session_start();
    include('../include/db.php');
    $empID = $_SESSION['empID'];
    // SELECT ALL ANNOUNCEMENT
    $selAnnounce = mysqli_query($profConn, "SELECT * FROM `announce` WHERE `empid` = '$empID' ORDER BY time desc");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/profInterface-style.css">
    <title>Quezon City University | Professor Login</title>
</head>
<body>
    
    <?php include('../include/header.php'); ?> 

    <div class="container">
        <section class ="admin-panel">
            <div class="prof-profile">
                <?php include('../include/sidebar.php') ?>
                <a href="editProfile.php" class="edit"> Edit Profile</a>
            </div>

            <div class="navigation">
                <ul>
                    <li> <a href="profInterface.php" > <img src="../icons/document.png" alt="">  overview </a> </li>
                    <li> <a href="./profInfo.php"> <img src="../icons/graduation.png" alt="">  academic profile </a> </li>
                    <li> <a href="calendar.php"> <img src="../icons/timetable.png" alt=""> calendar </a> </li>
                    <li> 
                        <a id="docu-btn"> 
                            <img src="../icons/requirement.png" alt=""> 
                            documents
                            <img src="../icons/down-arrow.png" id="drop-down">
                            <div class="docu-other" id="other-docu">
                                <a href="grade.php"> Grade </a>
                                <a href="attendance.php"> Attendance </a>
                                <a href="list.php"> Master List </a>
                            </div>
                        </a> 
                    </li>
                    <li> <a href="profAnnouncement.php" class="selected"> <img src="../icons/megaphone.png" alt=""> announcements </a> </li>
                </ul>
            </div>

        </section>


        <section class = "admin-container">
            <div class="announement-prof">
                <div class="announcement-container">

                    <div class="post-announcement">
                        <div class="title-announce">
                            <img src="../icons/announcement.png" alt="">
                            <h1> post an announcement </h1>
                        </div>

                        
                        <div class="post">
                            <form action="../process/announcement.php" method="POST">
                                <textarea name="announcement" placeholder="Write an announcement here"></textarea>
                                <div class="action-post">
                                    <p id="message"> Posted Successfuly </p>
                                    <input type="submit" value="POST" name="announceBtn">
                                </div>
                            </form>
                        </div>
                        
                    </div>

                    <div class="posted-announcement">
                        <h3> Faculty Announcment </h3>
                        <div class="announcements">
                            <?php
                                if ($selAnnounce -> num_rows > 0){
                                    while ($row = $selAnnounce -> fetch_assoc()){ ?>
                                        <div class="announce-prof">
                                            <h5> 
                                                <span> Professor  <?=$row['lastname']?> posted </span>
                                                <span class="date-time"> <?=$row['date']?> <?=$row['time']?></span>
                                            </h5>
                                            <p> <?=$row['announcement'];?> </p>
                                        </div>
                                 <?php }
                                } ?>
                           
                        
                        </div>
                    </div>

                </div>
            </div>
       
        </section>
    </div>




   






</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
</html>