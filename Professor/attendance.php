<?php
     include('../include/query.php');
    include('../include/db.php');

    // SELECT SUBJECT AND SECTION HANDLED BY PROFESSOR
    $selSecSub = mysqli_query($profConn, "SELECT * FROM `professor_section` WHERE `profID` = '$empID' ");
    $SecSub = mysqli_fetch_assoc($selSecSub);

    $section = $SecSub['sectionName'];
    $subject = $SecSub['subject'];

    // SELECT ALL INFO OF STUDENT
    $selStud = mysqli_query($enConn, "SELECT * FROM hrdb.tblemployees a
    JOIN professor_portal.professor_section b
    ON a.EMPLOYEEID = b.profID
    JOIN enrollment.student_sections c
    ON b.sectionName = c.sectionname
    JOIN enrollment.studentinfo d
    ON c.StudentID = d.StudentID
    WHERE b.profID = '$empID' AND b.sectionName = '$section' AND b.subject = '$subject'");

  

    // SELECT ALL HANDLED SECTION
    $selSec = mysqli_query($profConn, "SELECT DISTINCT sectionName FROM `professor_section` WHERE `profID` = '$empID' ");

    // SELECT ALL HANDLED SUBJECT
    $selSub = mysqli_query($profConn, "SELECT DISTINCT `subject` FROM `professor_section` WHERE `profID` = '$empID' AND `subject` = '$subject'");

    //SELECT ALL FILE
    $selFile = mysqli_query($profConn, "SELECT * FROM `attendance` WHERE `emp_id` = '$empID' ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/profInterface-style.css">
    <title>QCU | Calendar</title>
</head>
 <!-- AJAX --> 
 <script src="http://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#section').change(function(){
            var section = $('#section').val();

            $('#subject').load('../ajaxProcess/fetchSubject.php',{
                section: section
            });
        });
    });
</script>


<body>

   <?php include('../include/header.php'); ?> 
   
   <div class="container">

        <section class ="admin-panel">
            <div class="prof-profile">
                <?php include('../include/sidebar.php'); ?>
                <a href="editProfile.php" class="edit"> Edit Profile</a>
            </div>

            <div class="navigation">
                <ul>
                    <li> <a href="profInterface.php" > <img src="../icons/document.png" alt="">  overview </a> </li>
                    <li> <a href="./profInfo.php" > <img src="../icons/graduation.png" alt="">  academic profile </a> </li>
                    <li> <a href="calendar.php"> <img src="../icons/timetable.png" alt=""> calendar </a> </li>
                    <li> 
                        <a id="docu-btn" class="selected"> 
                            <img src="../icons/requirement.png" alt=""> 
                            documents
                            <img src="../icons/down-arrow.png" id="drop-down">
                            <div class="docu-other" id="other-docu">
                                <a href="grade.php"> Grade </a>
                                <a href="attendance.php" class="selected"> Attendance </a>
                                <a href="list.php"> Master List </a>
                            </div>
                        </a> 
                    </li>
                    <li> <a href="profAnnouncement.php"> <img src="../icons/megaphone.png" alt=""> announcements </a> </li>
                </ul>
            </div>

            
        </section>


      <section class = "admin-container">

         <div class="attendance-container">
            <div class="header-attendance">
                <form action="../process/attendanceFile.php" method="POST" enctype="multipart/form-data">
                <div class="combo-boxes">
                    <div class="combo-box">
                        <label for=""> Section </label>
                        <select id="section" name="section">
                            <?php if(mysqli_num_rows($selSec) > 0) { 
                                while($row = mysqli_fetch_assoc($selSec)) { ?>
                                    <option value="<?=$row['sectionName']?>"> <?=$row['sectionName']?> </option>
                            <?php } } ?>
                        </select>
                    </div>

                    <div class="combo-box">
                        <label for=""> Subject </label>
                        <select name="subject" id="subject">
                            <?php if(mysqli_num_rows($selSub) > 0) { 
                                while($row = mysqli_fetch_assoc($selSub)) { ?>
                                    <option value="<?=$row['subject']?>"> <?=$row['subject']?> </option>
                            <?php } } ?>
                        </select>
                    </div>

                    <div class="upload">
                        <label for="file"> Upload </label>
                        <input type="file" name="file" id="file">
                        <input type="submit" value="Save" name="attendanceBtn">
                    </div>        
               </div>
               </form>
               <h1> attendance </h1>
            </div>

            <div class="attendance-box">
                <table border="0">
                    <tr>
                        <th> Section </th>
                        <th> Subject </th>
                        <th> File name </th>
                    </tr>                 
                <?php if(mysqli_num_rows($selFile) > 0) {
                    while($files = mysqli_fetch_assoc($selFile)) { ?>
                    <tr>
                        <td> <?=$files['section']?> </td>
                        <td> <?=$files['subject']?> </td>
                        <td>
                            <div class="file-download">
                                <a target = "blank" href="../files/<?=$files['file_name']?>"> <?=$files['file_name']?> <img src="../icons/download.png" alt=""> </a>
                            </div>
                        </td>
                    </tr>     
                <?php } } ?> 
                </table>
            </div>

         </div>
      </section>
   </div>

</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
</html>