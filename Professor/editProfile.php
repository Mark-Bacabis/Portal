<?php
    include('../include/query.php');
    include('../include/db.php');
    $message = $_SESSION['message'];
    $selaAcc =  mysqli_query($profConn, "SELECT * FROM `professor_account` WHERE `emp_id` = '$empID' ");
    $prof = mysqli_fetch_assoc($selaAcc);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/profInterface-style.css">
    <title>Quezon City University | Professor Login</title>
      <!-- AJAX --> 
    <script src="http://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

    <script>
        $(document).ready(function(){
            $('#newPass').keyup(function(){
                var newPass =  $('#newPass').val();
                $('#new-pass-message').load('../ajaxProcess/password.php',{
                    newPass:newPass
                });
            });

            $('#conPass').keyup(function(){
                var newPass = $('#newPass').val();
                var conPass = $('#conPass').val();

                $('#confirm-pass-message').load('../ajaxProcess/password.php',{
                    newPassword:newPass,
                    conPass:conPass
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

        <section class="admin-container">
            <div class="edit-profile-container">
                <section class = "change-prof">
                    <form action="../process/changeProfile.php" method="POST" enctype="multipart/form-data">
                        <img id="user" src="../profile/<?=$prof['profile']?>" alt="">
                        <input type="file" name="profile" id="profile-btn">         
                        <input type="submit" value="Change profile" name="profileBtn">             
                    </form>
                </section>
                
                <section class = "change-pass">
                    <form action="../process/changePassword.php" method="POST">
                        <div class="form-control">
                            <label for="curPass"> Current Password </label>
                            <input type="password" name="curPass" id="curPass" required>
                        </div>
                    
                        <div class="form-control">
                            <label for="newPass">
                                New Password <span id="new-pass-message"></span> 
                            </label>
                            <input type="password" name="newPass" id="newPass" required>
                        </div>

                        <div class="form-control">        
                            <label for="conPass"> Confirm Password <span id="confirm-pass-message"> </span> </label> 
                            <input type="password" name="conPass" id="conPass" required>
                        </div>    
                        <div class="form-control">
                            <div class="message"> <?=$message?> </div> <input type="submit" value="Change" name="updateBtn">   
                        </div>     
                    </form>     
                </section>
               
            </div>
        </section>

       

<!--
    
        
         -->
    </div>




   






</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"> </script>
</html>


<?php 
    unset($_SESSION['message'])
?>