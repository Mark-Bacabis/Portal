<?php
    include('../include/query.php');
    include('../include/db.php');
    $empID = $_SESSION['empID'];

    //QUERY FOR SELECTING ALL INFORMATION
    $selProfInfo = mysqli_query($profConn, "SELECT * FROM `academic_profile` as ap
    JOIN `personal_info` as pf
    ON ap.emp_id = pf.emp_id
    JOIN `professor_contact` as pc
    ON ap.emp_id = pc.emp_id
    JOIN `emergency_contact` as ec
    ON ap.emp_id = ec.emp_id
    WHERE ap.emp_id = '$empID';");
    // Para makuha lahat ng column
    $profInfo = mysqli_fetch_array($selProfInfo);

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
                    <li> <a href="profInterface.php" > <img src="../icons/document.png" alt="">  overview </a> </li>
                    <li> <a href="./profInfo.php" class="selected"> <img src="../icons/graduation.png" alt="">  academic profile </a> </li>
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

        <section class = "admin-container">
            <div class="prof-info-container">
                <div class="academic-profile">
                    <div class="title">
                        <h2> Academic Profile </h2>
                        <hr>
                    </div>

                    <table border="0">
                        <tr>
                            <td> <input type="text" value="<?=$profInfo['emp_id']?>" disabled> <br> <label for=" "> Employee ID </label></td>
                            <td> <input type="text" value="<?=$profInfo['DEPARTMENT']?>" disabled> <br> <label for=" "> Department </label></td>
                            <td> <input type="text" value="<?=$profInfo['POSITION']?>" disabled> <br> <label for=" "> Position </label></td>
                            <td> <input type="text" value="<?=$profInfo['EMPLOYMENT_STAT']?>" disabled> <br> <label for=" "> Employment Status </label></td>
                        </tr>
                        <tr>
                            <td> <input type="text" value="<?=$profInfo['DEGREE']?>" disabled> <br> <label for=" ">Degree</label></td>
                            <td> <input type="text" value="<?=$profInfo['INSTITUTION']?>" disabled> <br> <label for=" ">Insitution</label></td>
                            <td> <input type="text" value="<?=$profInfo['YEAR GRADUATE']?>" disabled> <br> <label for=" "> Year Graduate </label></td>
                            <td> <input type="text" value="<?=$profInfo['FIELD']?>" disabled> <br> <label for=" "> Field </label></td>
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
                                    <!-- yung $prof ba?--> 
                                    <input type="text" name="" id="" value="<?=$profInfo['LNAME']?>" disabled> <br> 
                                    <label for=""> Lastname </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['FNAME']?>" disabled> <br> 
                                    <label for=""> Firstname </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['MNAME']?>" disabled> <br> 
                                    <label for=""> Middlename </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value=" <?=$profInfo['SUFFIX']?>" disabled> <br> 
                                    <label for=""> Suffix </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['BIRTHDATE']?>" disabled> <br> 
                                    <label for=""> Birthday </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['BIRTHPLACE']?>" disabled> <br> 
                                    <label for=""> Place of Birth </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['GENDER']?>" disabled> <br> 
                                    <label for=""> Gender </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['RELIGION']?>" disabled> <br> 
                                    <label for=""> Religion </label>
                                </td>
                            </tr>
                            <form action="../include/profInfo.php" method="POST">
                            <tr>
                                <td> 
                                    <input type="text" name="address" id="" class="textAble" value="<?=$profInfo['CIVIL_STAT']?>" disabled style = "width:80%"> <br> 
                                    <label for=""> Civil Status </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['NATIONALITY']?>" disabled> <br> 
                                    <label for=""> Nationality </label>
                                </td>
                                <td> 
                                    <input type="text" name="rel" id="" class="textAble" value="<?=$profInfo['HOUSE_NO']?>" disabled> <br> 
                                    <label for=""> House No. </label>
                                </td>
                                <td> 
                                    <input type="text" name="height" id="" class="textAble" value="<?=$profInfo['BARANGAY']?>" disabled> <br> 
                                    <label for=""> Barangay </label>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="text" name="weight" id="" class="textAble" value="<?=$profInfo['DISTRICT']?>" disabled>  <br> 
                                    <label for=""> District </label>
                                </td>
                                <td> 
                                    <input type="text" name="bt" id="" value="<?=$profInfo['CITY']?>" disabled> <br> 
                                    <label for=""> City </label>
                                </td>
                                <td> 
                                    <input type="text" name="bt" id="" value="<?=$profInfo['PROVINCE']?>" disabled> <br> 
                                    <label for=""> Province </label>
                                </td>
                                <td> 
                                    <input type="text" name="bt" id="" value="<?=$profInfo['ZIP']?>" disabled> <br> 
                                    <label for=""> Zip Code </label>
                                </td>
                            </tr>
                        </table>
                       
                        </form>
                    </div>



                    <div class="contact-info" id="contact-container">
                        <table>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['mobile_no']?>" disabled> <br> 
                                    <label for=""> Mobile number </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['landline_no']?>" disabled> <br> 
                                    <label for=""> landline number </label>
                                </td>
                                <td colspan="2"> 
                                    <input type="text" name="" id="" value="<?=$profInfo['school_email']?>" disabled style = "width: 90%"> <br> 
                                    <label for=""> school email </label>
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="emergency-info" id="emergency-container">
                        <table>
                            <tr>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['fullname']?>" disabled> <br> 
                                    <label for=""> Fullname </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['relation']?>" disabled> <br> 
                                    <label for=""> Relation </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="" id="" value="<?=$profInfo['contact_num']?>" disabled> <br> 
                                    <label for=""> Contact number </label>
                                </td>
                                <td> 
                                    <input type="text" name="" id="" value="<?=$profInfo['home_address']?>"  disabled> <br> 
                                    <label for=""> Home address </label>
                                </td>
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