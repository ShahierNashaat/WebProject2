<html>
    <head>
        <title>Nearby Services</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            #show_div{
                background-color: #F8C471;
                margin-left: 30%; 
                margin-right: 30%;
                border-radius: 10px; 
                padding-left: 15px;
                margin-top: 10px;
            }
            h3{
                color: #A80101;
                padding-top: 5px;
            }
            p{
                padding-bottom: 5px;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <?php
            include('DB.php');
            $city = $_GET['town'];
            $type = $_GET['type'];
            if($type == "All"){
                $rows = $db->getRows('SELECT Name,Type,Address,Phone from service where City=?',array($city));
                foreach($rows as $row){
                    echo "<div id='show_div'>";
                    echo "<h3>".$row[0]."</h3>";
                    echo "<p>Type: ".$row[1]."<br><br>Address: ".$row[2];
                    if($row[3] != null){
                        echo "<br><br>Phone: 0".$row[3];
                    }
                    echo "</p></div>";
                }
            }
            else{
                $rows = $db->getRows('SELECT Name,Type,Address,Phone from service where City=? AND Type=?',array($city,$type));
                foreach($rows as $row){
                    echo "<div id='show_div'>";
                    echo "<h3>".$row[0]."</h3>";
                    echo "<p>Type: ".$row[1]."<br><br>Address: ".$row[2];
                    if($row[3] != null){
                        echo "<br><br>Phone: 0".$row[3];
                    }
                    echo "</p></div>";
                }
            }
        ?>
    </body>
<html>