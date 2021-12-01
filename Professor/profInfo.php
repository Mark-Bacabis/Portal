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
        <?php include('../include/sidebar.php'); ?>

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