<?php
    include('../include/query.php');
    include('../include/db.php');

    // SELECT ALL MY HANDLED STUDENTS
    $fetchMyStudent = mysqli_query($enConn, "SELECT COUNT(DISTINCT students.`FullName-Last`) as myStudents FROM student_sections as stud_sec JOIN studentinfo as students ON stud_sec.StudentID = students.StudentID JOIN professor_portal.professor_section as prof_sec ON prof_sec.sectionName = stud_sec.sectionname WHERE prof_sec.profID = '$empID'");

    // SELECT ALL MY HANDLED SECTIONS
    $fetchMySection = mysqli_query($enConn, "SELECT COUNT(DISTINCT prof_sec.sectionName) as mySections FROM enrollment.student_sections as stud_sec
    JOIN professor_portal.professor_section as prof_sec
    ON prof_sec.sectionName = stud_sec.sectionname
    WHERE prof_sec.profID = '$empID'");

    // SELECT ALL MY SUBJECTS
    $fetchMySubject = mysqli_query($profConn, "SELECT COUNT(DISTINCT subject) as mySubjects FROM `professor_section` WHERE profID = '$empID'");

    $countMySubject = mysqli_fetch_assoc($fetchMySubject);
    $countMySection = mysqli_fetch_assoc($fetchMySection);
    $countMyStudent = mysqli_fetch_assoc($fetchMyStudent);

    // SELECT ALL ANNOUNCMENTS 
    $fetchAllAnnouncement = mysqli_query($profConn, "SELECT * FROM `announce` ORDER BY `date` DESC ");

    $dateToday = date('m-d-y');
    $day = date("d");
    $dayName = date("l");
    $monthName = date("M");
    $year = date("Y");
    $month = date("F");
    $dateNow = "$month $day, $year";


    // FETCH ALL EVENTS THIS CURRENT MONTH 
    $fetchAllEvents = mysqli_query($profConn, "SELECT * FROM `calendar` WHERE `date` LIKE '%$monthName%' AND `date` != '$dateNow' ");


    //SELECT ALL ANNOUNCEMENT TODAY
    $fetchAnnouncementToday = mysqli_query($profConn, "SELECT * FROM `calendar` WHERE `date` = '$dateNow'");

    $todaysAnnouncement = mysqli_fetch_assoc($fetchAnnouncementToday);

   // echo $todaysAnnouncement['announcement'];
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
                    <div class="boxes"><p> Total number of students </p> <h1> <?=$countMyStudent['myStudents'];?> </h1> </div>
                    <div class="boxes"><p> Total number of Sections </p> <h1> <?=$countMySection['mySections']?> </h1> </div>
                    <div class="boxes"><p> Total number of subjects </p> <h1> <?=$countMySubject['mySubjects']?> </h1> </div>
                </div>
            </div>

            <div class="content-container">
                <div class="first-container">
                    <h1>Quezon City University Calendar</h1>

                    <div class="date">
                            <h1><?=$day?></h1>
                            <h2><?=$dayName?>, <span><?=$monthName?></span></h2>
                            <h3><?php if(mysqli_num_rows($fetchAnnouncementToday) < 1 ){ echo "No announcement"; }
                            else{ echo $todaysAnnouncement['event']; } ?></h3>
                        
                    </div>

                    <div class="sched">
                        <h3>Schedule for the month of <?=$month?></h3>
                        <?php if(mysqli_num_rows($fetchAllEvents) > 0) {
                            while($eventThisMonth = mysqli_fetch_assoc($fetchAllEvents)) { ?>
                        <p> <?=$eventThisMonth['event']?> <span> <?=$eventThisMonth['date']?>  </span> </p>
                       <?php } } else{
                           echo "<h3> No events this month </h3>";
                       } ?>
                    </div>

                    <div class="announcement">
                        <h1> <img src="../icons/announcement.png" alt=""> Announcements </h1>
                        <?php if(mysqli_num_rows($fetchAllAnnouncement) > 0) { 
                            while ($announcements = mysqli_fetch_assoc($fetchAllAnnouncement)) {  ?>
                        <div class="announce-box">
                            <h3> <?=$announcements['date']?> <span class="announce-time" > <?=$announcements['time']?></span> </h3>
                            <p><?=$announcements['announcement']?></p>
                        </div> 
                        <?php } } ?>

                
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