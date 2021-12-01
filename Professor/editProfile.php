<?php
    include('../include/query.php');
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
                    <li> <a href="profInterface.php" class="selected"> <img src="../icons/open-book.png" alt="">  overview </a> </li>
                    <li> <a href="./profInfo.php"> <img src="../icons/open-book.png" alt="">  academic profile </a> </li>
                    <li> <a href="calendar.php"> <img src="../icons/open-book.png" alt=""> calendar </a> </li>
                    <li> 
                        <a id="docu-btn"> 
                            <img src="../icons/open-book.png" alt=""> 
                            documents
                            <img src="../icons/down-arrow.png" id="drop-down">
                            <div class="docu-other" id="other-docu">
                                <a href="grade.php"> Grade </a>
                                <a href="attendance.php"> Attendance </a>
                                <a href="list.php"> Master List </a>
                            </div>
                        </a> 
                    </li>
                    <li> <a href="profAnnouncement.php"> <img src="../icons/open-book.png" alt=""> announcements </a> </li>
                </ul>
            </div>

            <div class="up-events">
                <h2>Upcoming Events</h2>
                <p><img src="../icons/party.png" alt="">Quezon City University U-Week</p>
                <p><img src="../icons/party.png" alt="">QCU Foundation Day</p>
                <p><img src="../icons/party.png" alt="">Buwan ng wika</p>
            </div>
        </section>

        <section class = "change-prof">
                <img id = "user" src="../icons/user.png" alt="">
                <button class = "cDP"> Choose Profile </button>
        </section>


        
        <section class = "change-pass">
            <div class="pw">
                <label for="curPass"> Current Password </label> <br>
                <input type="password" name="curPass" id="curPass"><br>

                <label for="newPass"> New Password <span> * 8 - 16 characters * </span> </label> <br>
                <input type="password" name="newPass" id="newPass"><br>

                <label for="conPass"> Confirm Password </label> <br>
                <input type="password" name="conPass" id="conPass"><br>
                
                <input type="submit" value="Change">
            </div>
                
                
        </section>
    </div>




   






</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"> </script>
</html>