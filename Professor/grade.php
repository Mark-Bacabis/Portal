<?php
    include('../include/query.php');
    include('../include/db.php');

    // SELECT SUBJECT AND SECTION HANDLED BY PROFESSOR
    $selSecSub = mysqli_query($profConn, "SELECT * FROM `professor_section` WHERE `profID` = $empID");
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
    $selSub = mysqli_query($profConn, "SELECT DISTINCT `subject` FROM `professor_section` WHERE `profID` = '$empID' AND `subject` = '$subject' ");

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

            $('.grade-box').load('../ajaxProcess/fetchStudent.php',{
                section:section
            });

            $('#subject').load('../ajaxProcess/fetchSubject.php',{
                section: section
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
                    <li> <a href="profInterface.php" > <img src="../icons/open-book.png" alt="">  overview </a> </li>
                    <li> <a href="./profInfo.php" > <img src="../icons/open-book.png" alt="">  academic profile </a> </li>
                    <li> <a href="calendar.php"> <img src="../icons/open-book.png" alt=""> calendar </a> </li>
                    <li> 
                        <a id="docu-btn" class="selected"> 
                            <img src="../icons/open-book.png" alt=""> 
                            documents
                            <img src="../icons/down-arrow.png" id="drop-down">
                            <div class="docu-other" id="other-docu">
                                <a href="grade.php" class="selected"> Grade </a>
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
          <div class="grade-container">
          
          <div class="header-grade">
              <div class="combo-boxes">
                <div class="combo-box">
                    <label for=""> Section </label>
                    <select id="section">
                        <?php if(mysqli_num_rows($selSec) > 0) { 
                            while($row = mysqli_fetch_assoc($selSec)) { ?>
                                <option value="<?=$row['sectionName']?>"> <?=$row['sectionName']?> </option>
                        <?php } } ?>
                    </select>
                </div>
                <div class="combo-box">
                    <label for=""> Subject </label>
                    <select name="" id="subject">
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
                <form action="../process/insertGrade.php" method="POST">
                    <?php
                        if(mysqli_num_rows($selStud) > 0){
                            while($row = mysqli_fetch_assoc($selStud)) { ?>
                            <tr>
                                <td> <?=$row['StudentID']?> </td>
                                <td> <?=$row['FullName-Last']?> </td>
                                <td> <?=$row['FullName-First']?> </td>
                                <td> <?=$row['FullName-Middle']?> </td>
                                <td> <input type="text" name="grade[]"> </td>
                                <td> 
                                    <select name="action[]">
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
          </div>
            <input type="submit" value="Submit Grade" class="submit">
        </form>          
        </div> 
      </section>
   </div>

</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
</html>