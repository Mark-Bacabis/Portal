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

                    <tr>
                       <td> 161234 </td>
                       <td> Mark Melvin </td>
                       <td> Bacabis </td>
                       <td> Estrera </td>
                    </tr>
              </table>
          </div>

         </div>
      </section>
   </div>




   






</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"></script>
</html>