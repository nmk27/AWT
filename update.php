<?php 
    include_once('config.php');
    session_start();

    $regno= $_SESSION['reg'];
    $name=$_SESSION['name'];
    $marks1=$_SESSION['marks1'];
    $marks2=$_SESSION['marks2'];
    $marks3=$_SESSION['marks3'];
 

    if(isset($_POST['marks1'])){
        $marks1=$_POST['marks1'];
        $marks2=$_POST['marks2'];
        $marks3=$_POST['marks3'];
        $sql="update `details` SET `Marks1` = '$marks1', `Marks2` = '$marks2', `Marks3` = '$marks3' WHERE `details`.`Reg No.` = '$regno'";
            
        if($con->query($sql)){
            echo '<script>alert("Updated");
                        window.location.href="dataret.php";</script>';
        }
        else{
            echo "Error: $sql <br> $con->error";
        }
        session_destroy();
    }
    $con->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/dataentry.css">
</head>

<body>
    

    <div class="container">
            <h1>data update</h1>
            <div class="line"></div>
            <h2>enter the details</h2>
            <form action="update.php" method="post">
                <span>Student reg. no.</span>
                <span class="got"> <?php echo $regno?></span>
                <span>Student name</span>
                <span class="got"> <?php echo $name?></span>
                <span>Marks in subject 1</span>
                <input type="number" name="marks1" id="marks1" autocomplete="off" max="100" required placeholder=<?php echo "$marks1"?>>
                <span>Marks in subject 2</span>
                <input type="number" name="marks2" id="marks2" autocomplete="off" max="100" required placeholder=<?php echo "$marks2"?>>
                <span>Marks in subject 3</span>
                <input type="number" name="marks3" id="marks3" autocomplete="off" max="100" required placeholder=<?php echo "$marks3"?>>
                <div class="line"></div>
                <button type="submit">SUBMIT</button>
                <a href="home.php">Home</a>
            </form>
        </div>

    

<?php
    require('footer.php')
?>