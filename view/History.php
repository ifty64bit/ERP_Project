<?php
include("../controller/History.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/global.css">
    <title>History</title>
</head>
<body>
<?php include("./components/Header.php") ?>
    <?php if(count($data)==0)
            {
                echo "<h2 style='text-align:center'>No User Record Found</h2>";
            }
        ?>
    <div class="main-wrapper flex-center">
        <table class="table-border blur-bg">
            <tr class="table-border">
                <td class="table-border">Photo</td>
                <td class="table-border">Title</td>
                <td class="table-border">Description</td>
                <td class="table-border">Starting Price</td>
                <td class="table-border">Current Price</td>
                <td class="table-border">Status</td>
                <td class="table-border">Action</td>
            </tr>
            <?php
             foreach ($data as $d)
             {
                 echo  "
                    <tr class='table-border'>
                        <td class='table-border'> <img src=../assets/uploads/".$d["photo"]." width='100px' ></td>
                        <td class='table-border'>".$d["title"]."</td>
                        <td class='table-border'>".$d["description"]."</td>
                        <td class='table-border'>".$d["init_price"]."</td>
                        <td class='table-border'>".$d["cur_price"]."</td>
                        <td class='table-border'>".$d["status"]."</td>
                        <td class='table-border''><a href='./Auction.php?id=".$d['id']."'><button class='btn space-x'>View</button></a></td>
                    </tr>
                 ";
             }
            ?>
        </table>
    </div>
</body>
</html>