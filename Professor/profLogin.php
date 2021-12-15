<?php
    error_reporting(1);
    session_start();
    $messageLogin = $_SESSION['messlogin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/prof-login-style.css">
    <title>Quezon City University | Professor Login</title>
</head>
<body>
    <div class="header">
        <div class="logo"> <img src="../icons/qcu_logo.png" alt=""> 
        </div>
            <div class="qcu"><h1>Quezon City University <span>Online Portal</span></h1>
            </div>
    </div>


    <div class="container">
        <div class="login-box">
            <section>
                <img src="../images/studs.png" alt="">
                <h3>Welcome To QCU Professor Portal</h3>
            </section>

            <section>
                <div class="login-container">
                    
                    <img src="../icons/user.png" alt="">
                    <center><h3>Login As Professor</h3></center>
                    
                    <form action="../process/login.php" method="POST">
                     
                        <label for="uname"> Employee ID </label>
                        <input type="text" name="uname" id="uname">
                        <br>
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass">
                        <br>
                        <input type="submit" value="LOGIN" name="loginBtn">
                        <p>Don't have an account? <a href="profRegister.php">Register here</a></p>
                    </form>
                    
                </div><p> <?=$messageLogin?> </p>
          
                
            </section>
        </div>
        
    </div>
</body>
</html>
<?php
    unset($_SESSION['messlogin']);
?>