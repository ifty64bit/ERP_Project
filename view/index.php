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
    <div class="mx my flex-center">
        <a href="./AddUser.php">
            <div class="card">
                <h3>Add User</h3>
            </div>
        </a>

        <a href="./ManageUser.php">
            <div class="card">
                <h3>Manage User</h3>
            </div>
        </a>
    </div>
</body>
</html>