<!-- Connector to the sql database -->
<?php require 'config.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="home.css">
    <title>AWT Assignment</title>
</head>

<body>
    <div class="container">

        <div class="head">
            <h1>Welcome</h1>
            <ul>
                <li>Name: niran raj pradhan</li>
                <li>reg no.: 201900128</li>
                <li>branch: cse</li>
                <li>class: 5th sem, a</li>
            </ul>
        </div>

        <div class="buttons">
            <a href="#">data entry</a>
            <a href="#">data retreival</a>
        </div>

        <div class="free">
            <h2>Favourite sports</h2>
            <a href="https://en.wikipedia.org/wiki/Esports">
                <img src="images/sports1.jpg" alt="esports">
            </a>
            <a href="https://en.wikipedia.org/wiki/UEFA_Champions_League">
                <img src="images/sports2.jpg" alt="ucl">
            </a>
            <a href="https://en.wikipedia.org/wiki/Concert">
                <img src="images/sports3.jpg" alt="liveperf">
            </a>
        </div>
    </div>

    <?php include 'footer.php'?>