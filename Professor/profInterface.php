<?php
    include('../include/query.php');
    include('../include/db.php');

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
        
        <section class = "admin-container">
            <div class="overview">
                <h1>Academic Year 2021 - 2022</h1>
                <h2 id = "overview"> <img src="../icons/open-book.png" alt=""> Overview</h2>

                <div class="summary">
                    <div class="boxes"><p> Total number of students </p> <h1> 250 </h1> </div>
                    <div class="boxes"><p> Total number of Sections </p> <h1> 5 </h1> </div>
                    <div class="boxes"><p> Total number of subjects </p> <h1> 4 </h1> </div>
                </div>
            </div>

            <div class="content-container">
                <div class="first-container">
                    <h1>Quezon City University Calendar</h1>

                    <div class="date">
                            <h1>11</h1>
                            <h2>Friday, <span>Oct</span></h2>
                            <h3>1st Day of Exam</h3>
                        
                    </div>

                    <div class="sched">
                        <h3>Schedule for the month of October</h3>
                        <p> Last day of dropping subjects <span> October 1  </span> </p>
                        <p> Last day of dropping subjects <span> October 1  </span> </p>
                        <p> Last day of dropping subjects <span> October 1  </span> </p>
                        <p> Last day of dropping subjects <span> October 1  </span> </p>
                    </div>

                    <div class="announcement">
                        <h1> <img src="../icons/announcement.png" alt=""> Announcements </h1>
                        <div class="announce-box">
                            <h3> September 21, 2021</h3>
                            <p>Want to know more about UniFAST-UAQTEA?
                               How about Free Higher Education? or how to apply for Tertiary Education
                               savail stipend or allowance per Academic Year? Say no more scholars! Because 
                               today, September 24, 2021 at 2:00 - 3:00 pm, we will be conducting an Online 
                               Orientation via zoom, and live at our Facebook Page. This orientation is exclusive 
                               only for 2nd, 3rd, & 4th Year QCU Students (all courses).See you there scholars!</p>
                        </div> 

                        <div class="announce-box">
                            <h3> September 21, 2021</h3>
                            <p>Want to know more about UniFAST-UAQTEA?
                               How about Free Higher Education? or how to apply for Tertiary Education
                               savail stipend or allowance per Academic Year? Say no more scholars! Because 
                               today, September 24, 2021 at 2:00 - 3:00 pm, we will be conducting an Online 
                               Orientation via zoom, and live at our Facebook Page. This orientation is exclusive 
                               only for 2nd, 3rd, & 4th Year QCU Students (all courses).See you there scholars!</p>
                        </div> 
                    </div>


                </div>
            </div>



            <footer>
            <div class="footer-primary">
                <div class="footer-info">
                    <h2> ABOUT QCU </h2>
                    <ul>
                        <li> <a href="#"> About us</a> </li>
                        <li> <a href="#"> Privacy Policy </a> </li>
                        <li> <a href="#"> Terms and Agreement </a> </li>
                    </ul>
                </div>

                <div class="footer-info">
                    <h2> QUICK LINKS </h2>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Mikeni Mikeni </a> </li>
                        <li> <a href="#"> Dugdug Doremi </a> </li>
                    </ul>
            </div>
            <div class="footer-info">
                <h2> SCHOOL BRANCHES </h2>
                <ul>
                    <li> <a href="#"> San Bartolome </a> </li>
                    <li> <a href="#"> Batasan </a> </li>
                    <li> <a href="#"> San Francisco </a> </li>
                </ul>
            </div>
                </div>
            </footer>
        </section>
    

    </div>




   






</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
</html>