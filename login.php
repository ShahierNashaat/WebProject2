<html>
    <head>
        <title>Nearby Services Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            #login_form{
                margin-left: 37%;
                margin-top: 220px;
                margin-right: 38%;
                width: 310px;
                height: 140px;
                padding: 20px;
            }
            #login_btn{
                margin-left: 5px;
                margin-top: 6px;
                margin-bottom: 8px;
                width: 300px;
            }
            #register_link{
                margin-left: 5px;
                color: #02035A;
            }
            #email_txt{
                margin: 5px;
            }
            #paswrd_txt{
                margin: 5px;
            }
            #alert_div{
                margin-left: 37%;
                margin-right: 38%;
                width: 340px;
                height: 20px;
                background-color: white;
                border-radius: 5px;
                padding-left: 8px;
            }
        </style>
    </head>
    <body>
        <form action="login.php" method="post" class="frm" id="login_form">
            <input type="text" name="useremail" placeholder="Enter your email" class="txt" id="email_txt">
            <br>

            <input type="password" name="userpass" placeholder="Enter your password" class="txt" id="paswrd_txt">
            <br>

            <input type="submit" value="Login" class="btn" id="login_btn"><br>
            <a class="lnk2" href="register.php" id="register_link">Don't have an account?</a>
        </form>
        <?php
            if(isset($_POST["useremail"]) && isset($_POST["userpass"])){
                if( $_POST["useremail"]!="" && $_POST["userpass"]!="" ){
                    $useremail=$_POST["useremail"];
                    $password=$_POST["userpass"];
                    include("DB.php");
                    $row = $db->getRow('SELECT COUNT(*) from user WHERE Email=? AND Password=?',array($useremail, $password));
                    if($row[0][0] == '1'){
                        unset($_POST["useremail"]);
                        unset($_POST["userpass"]);
                        header("location:root.php");
                    }
                    else{
                        unset($_POST["useremail"]);
                        unset($_POST["userpass"]);
                        echo "<div id='alert_div'>";
                        echo "<p>Wrong Email or Password</p> <div>";
                    }
                }else{
                    unset($_POST["useremail"]);
                    unset($_POST["userpass"]);
                    echo "<div id='alert_div'>";
                    echo "<p>Please enter your email and password</p> <div>";
                }
            }
        ?>
    </body>
</html>