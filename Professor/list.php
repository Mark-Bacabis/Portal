<?php
    include('../include/db.php');

    // SELECT ALL INFO OF STUDENT
    $selStud = mysqli_query($enConn, "SELECT * FROM studentinfo as a
    JOIN student_sections as b
    ON a.StudentID = b.StudentID
    WHERE b.sectionname = 'SBIT-1A'");

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
                    <li> <a href="profInterface.php" > <img src="../icons/open-book.png" alt="">  overview </a> </li>
                    <li> <a href="./profInfo.php" > <img src="../icons/open-book.png" alt="">  academic profile </a> </li>
                    <li> <a href="calendar.php"> <img src="../icons/open-book.png" alt=""> calendar </a> </li>
                    <li> 
                        <a id="docu-btn" class="selected"> 
                            <img src="../icons/open-book.png" alt=""> 
                            documents
                            <img src="../icons/down-arrow.png" id="drop-down">
                            <div class="docu-other" id="other-docu">
                                <a href="grade.php" > Grade </a>
                                <a href="attendance.php"> Attendance </a>
                                <a href="list.php" class="selected"> Master List </a>
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
      <div class="list-container">
            <div class="header-list">
               <div class="combo-boxes">
                  <div class="combo-box">
                     <label for=""> Section </label>
                     <select name="" id="">
                           <option value="1st"> 1st </option>
                           <option value="2nd"> 2nd </option>
                           <option value="3rd"> 3rd </option>
                           <option value="4th"> 4th </option>
                     </select>
                  </div>
               </div>
               <h1> Master List </h1>
            </div>

            <div class="list-box">
              <table border="0">
                    <tr>
                        <th> Student ID </th>
                        <th> Firstname </th>
                        <th> Lastname </th>
                        <th> Middlename </th>
                    </tr>
                    
                    <?php
                        if($selStud -> num_rows > 0){
                            while ($row = $selStud -> fetch_assoc()){?>
                                <tr>
                                    <td> <?=$row['StudentID']?> </td>
                                    <td> <?=$row['FullName-Last']?> </td>
                                    <td> <?=$row['FullName-First']?> </td>
                                    <td> <?=$row['FullName-Middle']?> </td>
                                </tr>    
                    <?php   }
                        }
                    ?>
                 
              </table>
          </div>

         </div>
      </section>
   </div>




   






</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
</html>