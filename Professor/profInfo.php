<?php
    include('../include/query.php');
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
                            <td> <input type="text" value="<?=$prof['employee_id']?>" disabled> <br> <label for=" "> Employee ID </label></td>
                            <td> <input type="text" value="" disabled> <br> <label for=" "> Department </label></td>
                            <td> <input type="text" value="" disabled> <br> <label for=" "> Year </label></td>
                            <td> <input type="text" value="" disabled> <br> <label for=" "> Campus </label></td>
                        </tr>
                        <tr>
                            <td> <input type="text" value="" disabled> <br> <label for=" ">Degree</label></td>
                            <td> <input type="text" value="" disabled> <br> <label for=" ">Insitution</label></td>
                            <td> <input type="text" value="" disabled> <br> <label for=" "> Year Graduate </label></td>
                            <td> <input type="text" value="" disabled> <br> <label for=" "> Field </label></td>
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
                                    <input type="text" name="" id="" value="<?=$prof['firstname']?>" disabled> <br> 
                                    <label for=""> Lastname </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$prof['lastname']?>" disabled> <br> 
                                    <label for=""> Firstname </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$prof['middlename']?>" disabled> <br> 
                                    <label for=""> Middlename </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value=" " disabled> <br> 
                                    <label for=""> Suffix </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$prof['birthdate']?>" disabled> <br> 
                                    <label for=""> Birthday </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$prof['birthplace']?>" disabled> <br> 
                                    <label for=""> Place of Birth </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$prof['sex']?>" disabled> <br> 
                                    <label for=""> gender </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$prof['religion']?>" disabled> <br> 
                                    <label for=""> Religion </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$prof['civilstatus']?>" disabled> <br> 
                                    <label for=""> civil status </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$prof['citizenship']?>" disabled> <br> 
                                    <label for=""> nationality </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="" disabled> <br> 
                                    <label for=""> house no. </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="" disabled> <br> 
                                    <label for=""> barangay. </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" value="" disabled> <br> 
                                    <label for=""> district </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="" disabled> <br> 
                                    <label for=""> city / province </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="" disabled>  <br> 
                                    <label for=""> zip code </label>
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
                                    <input type="text" name="" id="" value="<?=$prof['contact']?>" disabled> <br> 
                                    <label for=""> Mobile number </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$prof['phno']?>" disabled> <br> 
                                    <label for=""> landline number </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$prof['email']?>" disabled> <br> 
                                    <label for=""> school email </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="" disabled> <br> 
                                    <label for=""> facebook </label>
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
                                    <label for=""> Fullname </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Relation </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> Contact number </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" disabled> <br> 
                                    <label for=""> home address </label>
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