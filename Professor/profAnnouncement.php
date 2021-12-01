<?php
    include('../includeDB/profDB.php');
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
                <div class="profile">
                    <img src="../icons/user.png" alt="">
                    <div class="prof-name">
                        <h3>Mark melvin bacabis</h3>
                        <h5>21-0001</h5>
                    </div>
                </div>
                <a href="editProfile.php" class="edit"> Edit Profile</a>
            </div>

            <div class="navigation">
                <ul>
                    <li> <a href="profInterface.php" > <img src="../icons/open-book.png" alt="">  overview </a> </li>
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
                    <li> <a href="profAnnouncement.php" class="selected"> <img src="../icons/open-book.png" alt=""> announcements </a> </li>
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
            <div class="announement-prof">
                <div class="announcement-container">

                    <div class="post-announcement">
                        <div class="title-announce">
                            <img src="../icons/announcement.png" alt="">
                            <h1> post an announcement </h1>
                        </div>

                        
                        <div class="post">
                        <form action="../process/announcement.php" method="POST">
                            <textarea name="announcement" placeholder="Write an announcement here"></textarea>
                            <div class="action-post">
                                <p id="message"> Posted Successfuly </p>
                                <input type="submit" value="POST" name="announceBtn">
                            </div>
                        </form>
                        </div>
                        
                    </div>

                    <div class="posted-announcement">
                        <h3> Faculty Announcment </h3>
                        <div class="announcements">
                           <div class="announce-prof">
                                <h5> Mrs. Bulleque posted </h5>
                                <p> 
                                   "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga illo sequi eaque rerum fugit ab sed! Praesentium debitis repudiandae consequatur"
                                </p>
                           </div>
                           <div class="announce-prof">
                                <h5> Mr. Bacabis posted </h5>
                                <p> 
                                   "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsum perspiciatis adipisci odio corporis, vitae quod porro dolore temporibus voluptates, nemo id! Consectetur dolores, atque repellat aliquam corrupti sapiente eligendi quae commodi corporis, repellendus omnis placeat accusamus necessitatibus ratione! Cum nam expedita nesciunt! Architecto aspernatur magni beatae possimus, labore reprehenderit."
                                </p>
                           </div>
                        </div>
                    </div>

                </div>

                <div class="chat-container">
                    <div class="chat-box">
                        
                        <label for="send-chat" class="chats-container">
                            <div class="options">
                                <h2> ChatBox </h2>
                                <img src="../icons/down-arrow.png" id="minimize">
                            </div>

                            <div class="chats">
                                <div class="chat">
                                    <img src="../icons/user.png">
                                    <p> aaLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, facere.</p>
                                </div>
                                    
                                <div class="chat">
                                    <img src="../icons/user.png">
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, aliquam modi magnam quae aspernatur dolores sint ratione quibusdam deleniti odit error doloremque atque obcaecati fuga. Dignissimos amet perferendis consectetur sequi ipsum voluptates saepe quam eius, dolor suscipit error rerum pariatur!</p>
                                </div>

                                <div class="chat">
                                    <img src="../icons/user.png">
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. In veniam minima fuga. Commodi culpa est maxime sunt iusto dolorem temporibus. Minus ipsam voluptatem enim porro veritatis sequi tempora doloribus perspiciatis.</p>
                                </div>
                            </div>


                            <div class="send-chat-option">
                                <input type="text" name="send-chat" id="send-chat" placeholder="Aa">
                                <button class="send-btn"> <img src="../icons/send-message.png" alt="">   </button>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
       
        </section>
    </div>




   






</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
</html>