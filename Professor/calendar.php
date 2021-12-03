<?php
    include('../include/db.php');
    include('../include/query.php');
    $selCalendar = mysqli_query($profConn, "SELECT * FROM calendar");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/profInterface-style.css">
    <title> QCU | Calendar</title>
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
                    <li> <a href="calendar.php" class="selected"> <img src="../icons/open-book.png" alt=""> calendar </a> </li>
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
            <div class="info">
                <div class="qcu">
                   <div class="title">
                        <img src="../icons/qcu_logo.png" alt="">
                        <h1> Quezon City University Calendar </h1>
                   </div> 
                    <h3> A.Y 2021 - 2022 </h3>
                </div>

                <div class="sem">
                    <div class="sem-info">
                        <h3 id="firstSem"> First Semester </h3>
                      
                        <p> August 16 - December 18, 2021 </p>
                    </div>
                    
                    <div class="dates">
                        <table border = "0">
                            <tr>
                                <th> Dates </th>
                                <th> Events </th>
                            </tr>
                            <?php
                                if($selCalendar -> num_rows > 0){
                                    while($row =$selCalendar -> fetch_assoc()){ ?>
                                <tr>
                                    <td> <?=$row['date']?></td>
                                    <td> <?=$row['event']?></td>
                                   
                                </tr>
                            <?php   }
                                } ?>
                            
                        </table>    
                    </div>
                    
                 
                </div>
                
            </div>
        </section>





        
        
       





    
</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
</html>