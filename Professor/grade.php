<?php
    include('../include/query.php');
    include('../include/db.php');

    // SELECT SUBJECT AND SECTION HANDLED BY PROFESSOR
    $selSecSub = mysqli_query($profConn, "SELECT * FROM `professor_section` WHERE `profID` = '$empID' ");
    $SecSub = mysqli_fetch_assoc($selSecSub);

    $section = $SecSub['sectionName'];
    $subject = $SecSub['subject'];

    // SELECT ALL INFO OF STUDENT
    $selStud = mysqli_query($enConn, "SELECT * FROM professor_portal.professor_section as b 
    JOIN enrollment.student_sections as c
    ON b.sectionName = c.sectionname
    JOIN enrollment.studentinfo as d
    ON c.StudentID = d.StudentID
    WHERE b.profID = '$empID' AND c.sectionName = '$section' AND b.subject = '$subject' ");
  

    // SELECT ALL HANDLED SECTION
    $selSec = mysqli_query($profConn, "SELECT DISTINCT sectionName FROM `professor_section` WHERE `profID` = '$empID' ");

    // SELECT ALL HANDLED SUBJECT
    $selSub = mysqli_query($profConn, "SELECT DISTINCT `subject` FROM `professor_section` WHERE `profID` = '$empID' AND `sectionName`='$section' ");

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
            var subject = $('#subject').val();

            $('.grade-box').load('../ajaxProcess/fetchStudent.php',{
                section:section,
                subject:subject
            });

            $('#subject').load('../ajaxProcess/fetchSubject.php',{
                section: section,
                subject:subject
            });
        });

        $('#subject').change(function(){
            var subject = $('#subject').val();
            var section = $('#section').val();

            $('.grade-box').load('../ajaxProcess/fetchStudent.php',{ 
                subject:subject,
                section:section
            });
        });
    });
</script>

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
                    <li> <a href="./profInfo.php" > <img src="../icons/graduation.png" alt="">  academic profile </a> </li>
                    <li> <a href="calendar.php"> <img src="../icons/timetable.png" alt=""> calendar </a> </li>
                    <li> 
                        <a id="docu-btn" class="selected"> 
                            <img src="../icons/requirement.png" alt=""> 
                            documents
                            <img src="../icons/down-arrow.png" id="drop-down">
                            <div class="docu-other" id="other-docu">
                                <a href="grade.php" class="selected"> Grade </a>
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
        <form action="../process/insertGrade.php" method="POST"> 
            <div class="grade-container">
          
            <div class="header-grade">
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
              </div>
              <h1> grade </h1>
            </div>

          <div class="grade-box">
              <table border="0">
                    <tr>
                        <th> Student ID </th>
                        <th> Lastname </th>
                        <th> Firstname </th>
                        <th> Middlename </th>
                        <th> Grade  </th>
                        <th> Action  </th>
                    </tr>  
                    <?php
                        if(mysqli_num_rows($selStud) > 0){
                            while($row = mysqli_fetch_assoc($selStud)) { ?>
                            <tr>
                                <td> <input type="text" name="studID[]" value="<?=$row['StudentID']?>" class="studIdText" readonly> </td>
                                <td> <?=$row['FullName-Last']?> </td>
                                <td> <?=$row['FullName-First']?> </td>
                                <td> <?=$row['FullName-Middle']?> </td>
                                <td> <input type="text" name="grade[]" class ="grade" required> </td>
                                <td> 
                                    <select name="action[]" class="action" onchange="disableGrade()">
                                        <option value="COMPLETE"> COMPLETE </option>
                                        <option value="INC"> INC </option>
                                        <option value="DROP"> DROP </option>
                                    </select>
                                </td>
                            </tr>
                    <?php  }
                    }
                    ?>  
              </table>
              <input type="submit" value="Submit Grades" class="submit">
            </form> 
          </div>
        </div> 
    </section>
   </div>
</body>

<script>
    var grades = document.querySelectorAll('.grade');
    var action = document.querySelectorAll('.action');

    for(let i = 0; i < action.length; i++) {
        action[i].addEventListener('change', (e)=> {    
        
            console.log(action[i].value);
            if(action[i].value === 'COMPLETE'){
                grades[i].readOnly = false;
                grades[i].style.background = 'none';
            }
            else{
                grades[i].value = '';
                grades[i].readOnly = true;
                grades[i].style.background = '#30383b30';
            }
        });
    }
  
</script>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
</html>