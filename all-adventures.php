<?php
session_start();

$heading = $_SESSION["heading"];
$tripDate = $_SESSION["tripDate"];
$duration = $_SESSION["duration"];
$summary = $_SESSION["summary"];
?>
<html>

<head>

</head>

<body>
    <?php
    try {
        error_log("Connecting to DB\n", 0);
        $dbhost = 'localhost';
        $dbname = 'id20534462_skillforhire_jere';
        $dbuser = '	id20534462_jerrymag4';
        $dbpass = 'W8S=U[wj\Uko@/g&';
        $pdo = new PDO("mysqli:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

       
        $sql = "SELECT * FROM assignment3";
        $data = mysqli_query($pdo,$sql);

        $result = mysqli_fetch_assoc($data);

        echo $result;
       

        $pdo->beginTransaction();
        $stmt->execute([$heading, $tripDate, $duration, $summary]);
        $pdo->commit();
        ?>

        ?<?php

    } 
    catch (Exception $e) {
        echo "Error : " . $e->getMessage() . "<br/>";
        error_log("Cannot connect to DB\n", 0);

        ?>
               <?php
    }
    ?>
</body>

</html>
