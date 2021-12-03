<?php
    include('../include/db.php');
    include('../include/query.php');
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
                    <li> <a href="profInterface.php" > <img src="../icons/open-book.png" alt="">  overview </a> </li>
                    <li> <a href="./profInfo.php" > <img src="../icons/open-book.png" alt="">  academic profile </a> </li>
                    <li> <a href="calendar.php"> <img src="../icons/open-book.png" alt=""> calendar </a> </li>
                    <li> 
                        <a id="docu-btn" class="selected"> 
                            <img src="../icons/open-book.png" alt=""> 
                            documents
                            <img src="../icons/down-arrow.png" id="drop-down">
                            <div class="docu-other" id="other-docu">
                                <a href="grade.php"> Grade </a>
                                <a href="attendance.php" class="selected"> Attendance </a>
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

         <div class="attendance-container">
            <div class="header-attendance">
               <div class="combo-boxes">

                  <div class="combo-box">
                     <label for=""> Year </label>
                     <select name="" id="">
                           <option value="1st"> 1st </option>
                           <option value="2nd"> 2nd </option>
                           <option value="3rd"> 3rd </option>
                           <option value="4th"> 4th </option>
                     </select>
                  </div>
                  <div class="combo-box">
                     <label for=""> Section </label>
                     <select name="" id="">
                           <option value="1st"> 1st </option>
                           <option value="2nd"> 2nd </option>
                           <option value="3rd"> 3rd </option>
                           <option value="4th"> 4th </option>
                     </select>
                  </div>
                  <div class="combo-box">
                     <label for=""> Subject </label>
                     <select name="" id="">
                           <option value="1st"> 1st </option>
                           <option value="2nd"> 2nd </option>
                           <option value="3rd"> 3rd </option>
                           <option value="4th"> 4th </option>
                     </select>
                  </div>
                  <div class="upload">
                     <label for="file"> Upload </label>
                     <input type="file" name="" id="file">
                  </div>
               </div>
               <h1> attendance </h1>
            </div>

            <div class="attendance-box">
             
            </div>

         </div>
      </section>
   </div>

</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
</html>