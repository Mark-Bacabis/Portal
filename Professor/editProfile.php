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

        <section class = "change-prof">
                <img id = "user" src="../icons/user.png" alt="">
                <button class = "cDP"> Choose Profile </button>
        </section>


        
        <section class = "change-pass">
            <div class="pw">
                <label for="curPass"> Current Password </label> <br>
                <input type="password" name="curPass" id="curPass"><br>

                <label for="newPass"> New Password <span> * 8 - 16 characters * </span> </label> <br>
                <input type="password" name="newPass" id="newPass"><br>

                <label for="conPass"> Confirm Password </label> <br>
                <input type="password" name="conPass" id="conPass"><br>
                
                <input type="submit" value="Change">
            </div>
                
                
        </section>
    </div>




   






</body>
<script src = "../js/date.js"> </script>
<script src="../js/main.js"> </script>
</html>