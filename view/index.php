<?php
include("../controller/common/redir.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/global.css">
    <title>Portal</title>
</head>
<body>
    <?php include("./components/Header.php"); ?>
    <?php
        if($_SESSION['role']=='user')
        {
            include("./components/UserPortal.php");
        }
        else{
            include("./components/AdminPortal.php");
        }
    ?>
</body>
</html>