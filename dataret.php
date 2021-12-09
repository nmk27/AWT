<?php
require_once('config.php');

$regno = 0;
$name = "";
$marks2 = 0;
$marks3 = 0;
$marks1 = 0;
if (isset($_GET['regno'])) {
    $reg = $_GET['regno'];

    $sql = "select * from `details` where `details`.`Reg No.` = '$reg'";

    if ($result = $con->query($sql)) {
        $row = $result->fetch_array();
        if (isset($row['Reg No.'])) {
            $regno = $row['Reg No.'];
            $name = $row['Name'];
            $marks1 = $row['Marks1'];
            $marks2 = $row['Marks2'];
            $marks3 = $row['Marks3'];
        } else {
            echo '<script>alert("No data found");
                                window.location.href="dataret.php";</script>';
        }
    } else {
        echo "Error : $sq1 <br> $con->error";
    }
    $con->close();
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
    <div class="container">
        <h1>Data Retrieval</h1>
        <div class="line"></div>
        <form action="dataret.php" method="get">
            <label for="regno">Enter registration number:</label>
            <input type="number" name="regno" id="regno" placeholder="Press enter after input" autocomplete="off">
        </form>
        <div class="line"></div>
        <div class="details">
            <div>
                <span>registration number:</span>
                <span class="clearspan">
                    <?php echo $regno ? $regno : "" ?>
                </span>
            </div>
            <div>
                <span>Name:</span>
                <span class="clearspan">
                    <?php echo $name ? $name : "" ?>
                </span>
            </div>
            <div>
                <span>Marks 1:</span>
                <span class="clearspan">
                    <?php echo $marks1 ? $marks1 : "" ?>
                </span>
            </div>
            <div>
                <span>Marks 2:</span>
                <span class="clearspan">
                    <?php echo $marks2 ? $marks2 : "" ?>
                </span>
            </div>
            <div>
                <span>Marks 3:</span>
                <span class="clearspan">
                    <?php echo $marks3 ? $marks3 : "" ?>
                </span>
            </div>
        </div>
        <div class="line"></div>
        <div class="avg">
            <h2>average</h2>
            <h2><?php echo $marks1 ? ($marks1 + $marks2 + $marks3) / 3 : ""; ?></h2>
        </div>
        <a href="home.php">Home</a>
    </div>

    <?php include_once('footer.php') ?>