<html>
    <head>
        <title>Nearby Services Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            #register_form{
                margin-left: 37%;
                margin-top: 220px;
                margin-right: 38%;
                width: 310px;
                height: 205px;
                padding: 20px;
            }
            .register_txt{
                margin-bottom: 5px;
                margin-left: 5px;
            }
            #register_btn{
                margin-left: 5px;
                width: 300px;
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
        <form action="register.php" method="post" class="frm" id="register_form">
            <input type="text" name="firstname" placeholder="First Name" class="txt register_txt"><br>            
            <input type="text" name="lastname" placeholder="Last Name" class="txt register_txt"><br>            
            <input type="text" name="email" placeholder="Email" class="txt register_txt"><br>                      
            <input type="password" name="pass" placeholder="Password" class="txt register_txt"><br>            
            <input type="password" name="pass_2" placeholder="Confirm Password" class="txt register_txt"><br>
            <input type="submit" value="Sign Up" class="btn" id="register_btn">
        </form>
        <?php
            if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["pass_2"])){
                include("DB.php");
                if($_POST["firstname"]!="" && $_POST["lastname"]!="" && $_POST["email"]!="" && $_POST["pass"]!="" && $_POST["pass_2"]!="" ){
                    $row = $db->getRow('SELECT * from user WHERE Email=?',array($_POST["email"]));
                    if(!isset($row[0][0])){
                        if($_POST["pass"] == $_POST["pass_2"]){
                            $db->Execute('INSERT INTO user(FirstName,LastName,Email,Password) values (?,?,?,?)',
                            array($_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["pass"]) );
                            header("location:login.php");
                        }else{
                            echo "<div id='alert_div'>";
                            echo "<p>Error in confirming the password</p> <div>";
                        }
                    }else{
                        echo "<div id='alert_div'>";
                        echo "<p>The email is already used</p> <div>";
                    }
                }else{
                    echo "<div id='alert_div'>";
                    echo "<p>Please fill all the elements</p> <div>";
                }
            }
        ?>
    </body>
</html>