<?php
session_start();
$_SESSION["heading"] = $_GET["heading"];
$_SESSION["tripDate"] = $_GET["tripDate"];
$_SESSION["duration"] = $_GET["duration"];
$_SESSION["summary"] = $_GET["summary"];

$id = $_SESSION["id"];
$heading = $_SESSION["heading"];
$tripDate = $_SESSION["tripDate"];
$duration = $_SESSION["duration"];
$summary = $_SESSION["summary"];
?>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe & Kayak</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'header.php'; ?>
</head>

<body>
<form action="all-adventures.php">
    <?php
    try {
        error_log("Connecting to DB\n", 0);
        $dbhost = 'localhost';
        $dbname = 'id20534462_skillforhire_jere';
        $dbuser = 'id20534462_jerrymag4';
        $dbpass = 'W8S=U[wj\Uko@/g&';
        $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);


        $sql = "INSERT INTO `assignment3` (`id`, `heading`, `tripDate`, `duration`,`summary`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        $pdo->beginTransaction();
        $stmt->execute([$id, $heading, $tripDate, $duration, $summary]);
        $pdo->commit();

        ?>

        <br>
<label class="title" >Admin - Confirm</label>
<br>
         <br>
        <label class="subtitle">Data has been added successfully to the DB.</label>
        <br>

           <?php

    } catch (Exception $e) {
        echo "Error : " . $e->getMessage() . "<br/>";
        error_log("Cannot connect to DB\n", 0);

        ?>
        <label class="title">Data has NOT been Sent to the DB - Failed</label>
        <br>
        <label class="subtitle">Encountered technical errors. Please contact system administrator.</label>
        <br>
        <?php
    }
    ?>
   <br>
    <button onclick="history.go(-1)">Go Back</button>
    <main class="form-page">
        <div class="form-box">
    <br>
    <li><a href="all-adventures.php">View All Advent ures</a></li>
</body>

</html>
