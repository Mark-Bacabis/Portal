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
                    <li> <a href="./profInfo.php" class="selected"> <img src="../icons/open-book.png" alt="">  academic profile </a> </li>
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
            <div class="prof-info-container">
                <div class="academic-profile">
                    <div class="title">
                        <h2> Academic Profile </h2>
                        <hr>
                    </div>

                    <table border="0">
                        <tr>
                            <td> <input type="text" disabled> <br> <label for=" "> Employee ID</label></td>
                            <td> <input type="text" disabled> <br> <label for=" "> Department</label></td>
                            <td> <input type="text" disabled> <br> <label for=" "> Year </label></td>
                            <td> <input type="text" disabled> <br> <label for=" "> Campus </label></td>
                        </tr>
                        <tr>
                            <td> <input type="text" disabled> <br> <label for=" ">Degree</label></td>
                            <td> <input type="text" disabled> <br> <label for=" ">Insitution</label></td>
                            <td> <input type="text" disabled> <br> <label for=" "> Year Graduate </label></td>
                            <td> <input type="text" disabled> <br> <label for=" "> Field </label></td>
                        </tr> 

                    </table>
                </div>

                <div class="prof-info">
                    <div class="header-info">
                        <button id="personal-btn"> Personal Information </button>
                        <button id="contact-btn"> Contact Information </button>
                        <button id="emergency-btn"> Incase of Emergency </button>
                    </div>


                    <div class="personal-info" id="personal-container">
                        <table>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled>  <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <button> Edit </button>
                                </td>
                            </tr>
                        </table>
                    </div>



                    <div class="contact-info" id="contact-container">
                        <table>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> <button> Edit </button></td>
                            </tr>
                        </table>
                    </div>


                    <div class="emergency-info" id="emergency-container">
                        <table>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Name </label>
                                </td>
                            </tr>
                            <tr>
                            
                                <td> </td>
                                <td> <button> Edit </button></td>
                            </tr>
                        </table>
                    </div>


                </div>
            </div>
        </section>
    

    </div>




   






</body>
<script src = "../js/date.js"> </script>
<script src="../js/personalInfo.js"></script>
<script src="../js/main.js"></script>
</html>