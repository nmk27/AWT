<?php
    require_once('config.php');

    if(isset($_GET['regno'])){

        $regno=$_GET['regno'];

        $sql="select * from `details` where `details`.`Reg No.` = '$regno'";

    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Retrieval</title>
    <link rel="stylesheet" href="css/dataret.css">

</head>

<body>
    <div class="container show">
        <h1>Data Retrieval</h1>
        <div class="line"></div>
        <form action="dataret.php" method="get">
            <label for="regno">Enter registration number:</label>
            <input type="number" name="regno" id="regno" placeholder="Press enter after input">
        </form>
        <div class="line"></div>
        <div class="details">
            <div>
                <span>registration number:</span>
                <span class="clearspan">
                    201900128
                </span>
            </div>
            <div>
                <span>Name:</span>
                <span class="clearspan">
                    Niran
                </span>
            </div>
            <div>
                <span>Marks 1:</span>
                <span class="clearspan">
                    90
                </span>
            </div>
            <div>
                <span>Marks 2:</span>
                <span class="clearspan">
                    90
                </span>
            </div>
            <div>
                <span>Marks 3:</span>
                <span class="clearspan">
                    80
                </span>
            </div>
        </div>
        <div class="line"></div>
        <div class="avg">
            <h2>average</h2>
            <h2>206.6</h2>
        </div>
    </div>
</body>

</html>

