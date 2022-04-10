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
    ?>
    <div class="main-wrapper flex-center">
        <table class="table-border blur-bg">
            <tr class="table-border">
                <td class="table-border">Photo</td>
                <td class="table-border">Title</td>
                <td class="table-border">Starting Price</td>
                <td class="table-border">Current Bid</td>
                <td class="table-border">Action</td>
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
                        <td class='table-border''><a href='./Auction.php?id=".$d['id']."'><button class='btn space-x'>View</button></a></td>
                    </tr>
                 ";
             }
            ?>
        </table>
    </div>
    ?>
</body>
</html>