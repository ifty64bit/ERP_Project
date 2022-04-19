<?php
include("../controller/ViewSoldAuction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/global.css">
    <script src="./Search.js"></script>
    <title>Running Auction</title>
</head>
<body>
    <?php include('./components/Header.php') ?>
    <div class="flex-center mt">
        <input type="text" name="search" id="search" oninput="search(this)" placeholder="Search Username">
    </div>
    <div class="main-wrapper flex-center">
        <table class="table-border blur-bg" id="table">
            <tr class="table-border">
                <td class="table-border">Photo</td>
                <td class="table-border">Title</td>
                <td class="table-border">Starting Price</td>
                <td class="table-border">Selling Price</td>
                <td class="table-border">Sold To</td>
                <td class="table-border">Sold By</td>
            </tr>
        <?php
        foreach ($result as $d)
             {
                 $d["cur_price"]=="" ? $d["cur_price"]="No Bid Yet" :$d["cur_price"]=$d["cur_price"];
                 echo  "
                    <tr class='table-border'>
                        <td class='table-border'> <img src=../assets/uploads/".$d["photo"]." width='75px' ></td>
                        <td class='table-border'>".$d["title"]."</td>
                        <td class='table-border'>".$d["init_price"]."</td>
                        <td class='table-border'>".$d["cur_price"]."</td>
                        <td class='table-border''>".$d["soldTo"]."</td>
                        <td class='table-border''>".$d["soldBy"]."</td>
                    </tr>
                 ";
             }
            ?>
        </table>
    </div>
    <div class="flex-center" id="emptymsg">

    </div>
</body>
</html>