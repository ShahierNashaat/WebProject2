<html>
    <head>
        <title>Add Service</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            #service_form{
                margin-left: 37%;
                margin-top: 220px;
                margin-right: 38%;
                width: 310px;
                height: 200px;
                padding: 20px;
            }
            .service_txt{
                margin-bottom: 5px;
                margin-left: 5px;
            }
            .service_slekt{
                width: 300px;
                margin-left: 5px;
                margin-bottom: 5px;
            }
            .service_btn{
                width: 300px;
                margin-left: 5px;
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
        <form action="addservice.php" method="post" class="frm" id="service_form">
            <input type="text" name="service_name" placeholder="Service Title" class="txt service_txt">
            <input type="text" name="service_city" placeholder="Service City" class="txt service_txt">
            <input type="text" name="service_address" placeholder="Service Address" class="txt service_txt"><br>
            <input type="text" name="service_phone" placeholder="Service Phone Number" class="txt service_txt">
            <select name="service_type" class="slekt service_slekt">
                <option>Hospital</option>
                <option>Restaurant</option>
                <option>Hotel</option>
                <option>Mall</option>
            </select>
            <input type="submit" value="Add Service" class="btn service_btn">
        </form>
        <?php
            if(isset($_POST["service_name"]) && isset($_POST["service_city"]) && isset($_POST["service_address"]) && isset($_POST["service_phone"]) && isset($_POST["service_type"])){
                if( $_POST["service_name"]!="" && $_POST["service_city"]!="" && $_POST["service_address"]!=""){
                    include("DB.php");
                    if($_POST["service_phone"] == ""){
                        $db->Execute('INSERT INTO service(City,Name,Address,Type) values (?,?,?,?)',
                                array($_POST["service_city"],$_POST["service_name"],$_POST["service_address"],$_POST["service_type"]) );
                    }else{
                        $db->Execute('INSERT INTO service(City,Name,Address,Phone,Type) values (?,?,?,?,?)',
                                array($_POST["service_city"],$_POST["service_name"],$_POST["service_address"],$_POST["service_phone"],$_POST["service_type"]) );
                    }
                    header("location:root.php");
                }else{
                    echo "<div id='alert_div'>";
                    echo "<p>Please fill all the infromation</p> <div>";
                }
            }
        ?>
    </body>
</html>