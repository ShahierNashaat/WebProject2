<html>
    <head>
        <title>Nearby Services</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            #search_form{
                margin-left: 30%;
                margin-top: 150px;
                margin-right: 38%;
            }
            #town_select{
                margin-left: 35px;
                margin-right: 10px;
                margin-top: 8px;
                width: 150px;
            }
            #search_btn{
                margin-top: 9px;
                margin-left: 9px;
            }
            #rootHeader{
                text-align: center;
                color: #A80101;
                margin-top: 20px;
                font-size: 100px;
                background: #17202A;
                margin-bottom: 10px;
            }
            #type_select{
                width: 150px;
            }
            #add_service_btn{
                width: 150px;
                margin-left: 88%;
            }
        </style>
        <script>
            function visitPage(){
                window.location='addservice.php';
            }
        </script>
    </head>
    <body>
        <h1 id="rootHeader">Nearby Services</h1>
        <button onclick="visitPage();"  class="btn" id="add_service_btn">Add Service</button>
        <form id="search_form" class="frm" method="GET" action="show.php">
            <select id="town_select"  class="slekt" name="town">
                <?php
                    include('DB.php');
                    $rows = $db->getRows('SELECT DISTINCT(City) from service',array());
                    foreach($rows as $row){
                        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                    }
                ?>
            </select>
            <select id="type_select" class="slekt" name="type">
                <option value="All">All</option>
                <?php
                    $rows = $db->getRows('SELECT DISTINCT(Type) from service',array());
                    foreach($rows as $row){
                        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                    }
                ?>
            </select>
            <input type="submit" value="Search" class="btn" id="search_btn">
        </form>
    </body>
</html>