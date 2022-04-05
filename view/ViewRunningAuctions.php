<?php include('../controller/ViewRunningAuctions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/global.css">
    <title>Running Auction</title>
</head>
<body>
    <?php include('./components/Header.php') ?>
    <?php
        if(count($result)==0)
        {
            echo "<h3 class='flex-center'>No Auction is running</h3>";
        }
        else{
            print_r($result);
        }
    ?>
</body>
</html>