<!-- Connecting to the database -->
<?php
    require('config.php');

    $submitted=0;
    if(isset($_POST['regno'])){
        
        $name=$_POST['name'];
        $regno=$_POST['name'];
        $marks1=$_POST['marks1'];
        $marks2=$_POST['marks2'];
        $marks3=$_POST['marks3'];

        $sql="insert ignore `details` (`Reg No.`, `Name`, `Marks1`, `Marks2`, `Marks3`) VALUES ('$regno', '$name', '$marks1', '$marks2', '$marks3')";
        
        if($con->query($sql)== true)
        {
            $submitted=1;
            echo "Submitted";
        }
        else{
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
    <title>Data Entry</title>
    <link rel="stylesheet" href="css/dataenrty.css">
</head>

<body>

    <div class="container">
        <h1>data entry</h1>
        <div class="line"></div>
        <h2>enter the details</h2>
        <?php
        if($submitted===1)
            echo "<span>your response has been submitted. thank you.</span>";
        ?>


        <form action="dataentry.php" method="post">
            <span>Student reg. no.</span>
            <input type="number" name="regno" id="regno">
            <span>Student name</span>
            <input type="text" name="name" id="name">
            <span>Marks in subject 1</span>
            <input type="number" name="marks1" id="marks1">
            <span>Marks in subject 2</span>
            <input type="number" name="marks2" id="marks2">
            <span>Marks in subject 3</span>
            <input type="number" name="marks3" id="marks3">
            <div class="line"></div>
            <button type="submit">SUBMIT</button>
            <a href="home.php">Home</a>
        </form>
    </div>

<?php include("footer.php");?>