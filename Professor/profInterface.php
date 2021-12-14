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
    <link rel="stylesheet" href="../style/calendar.css">
    <title>Quezon City University | Professor Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/> <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet" /> 
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
                    <li> <a href="profInterface.php" class="selected"> <img src="../icons/document.png" alt="">  overview </a> </li>
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
                    <li> <a href="profAnnouncement.php"> <img src="../icons/megaphone.png" alt=""> announcements </a> </li>
                </ul>
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

                <div class="calendar-container">
                    <div class="calendar-box">
                        <div class="calendar">
                            <div class="month">
                                <i class="fas fa-angle-left prev"></i>
                                <div class="date">
                                    <h1></h1>
                                    <p></p>
                                </div>
                                <i class="fas fa-angle-right next"></i>
                            </div>
                            <div class="weekdays">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                            </div>
                            <div class="days"> </div>
                        </div>
                </diV>
                </div>
                
            </div>
        </section>
    </div>




<style>        
/* CALENDAR */
.calendar-container{
    position: fixed;
    width: max-content;
    height: max-content;
    bottom: 1.5%;
    right: 5%;
}

.calendar-box{
  width: 365px;
  height: 350px;
 
}

 .calendar-box .calendar {
  width: 100%;
  height: 100%;
  background-color: rgb(255, 255, 255);
  padding-bottom: 10x;
  border-radius: 7px;
  overflow: hidden;
  box-shadow: 0 7px 10px 0 rgba(0,0,0,.07);
  
}

 .calendar-box .month {
  width: 100%;
  height: 20%;
  background-color: #16437e;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 2rem;
  text-align: center;
  color: #fff;
}

.calendar-box .month i {
  font-size: 1.5em;
  cursor: pointer;
  opacity: .5;
} 

.calendar-box .month i:hover{
  opacity: 1;
}

.calendar-box .month p {
  font-size: .9em;
}

 .calendar-box .weekdays {
  width: 100%;
  height: max-content;
  padding: 0.4rem;
  display: flex;
  align-items: center;
  background-color: #113564;
  
}


 .calendar-box .weekdays div {
  font-size: .9em;
  font-weight: 300;
  width: calc(44.2rem / 7);
  display: flex;
  justify-content: center;
  align-items: center;
  color: rgba(255, 255, 255, 0.678);
}


.calendar-box .days {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}


 .calendar-box .days div {
  font-size: .8em;
  width: calc(15.4rem / 7);
  margin: 10px 6px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: background-color 0.2s;
}

 .calendar-box .days div:hover:not(.today) {
  background-color: #16437e86;
  cursor: pointer;
  border-radius: 4px;
}

 .calendar-box .prev-date,
 .calendar-box .next-date {
  opacity: .5;
}

 .calendar-box .today {
  background-color: #16437e;
  border-radius: 4px;
  color: #fff;
  cursor: default;
}































    </style>



   






</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
<script src="../js/calendar.js"></script>
</html>