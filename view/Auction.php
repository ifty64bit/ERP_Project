<?php
include("../controller/Auction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/global.css">
    <title><?php echo $result['title'] ?></title>
</head>
<body>
    <?php include("./components/Header.php") ?>
    <div class="flex-center my">
        <div class="blur-bg p mb" style="width: 535px;">
            <div class="mb"><img src="../assets/uploads/<?php echo $result['photo'] ?>" alt="prop" width="500px"></div>
            <div class="mb">
                <h4>Title</h4> <p><?php echo $result['title'] ?></p> 
            </div>
            <div class="mb">
                <h4>Description:</h4> <p> <?php echo $result['description'] ?></p>
            </div>
            <div class="mb">
                <h4>Starting Price</h4>
                <p><?php echo $result['init_price'] ?></p>
            </div>
            <div class="mb">
                <h4>Current Bid</h4>
                <p><?php echo $latestBid ?></p>
            </div>
            <div class="mb">
                <h4>Bid</h4>
                <form action="" method="post">
                    <input type="number" name="bid" id="bid">
                    <p><?php echo $errMsg ?></p>
                    <input type='submit' name="submit" class="btn space-x" value="Bid">
                </form>
            </div>
        </div>
    </div>
</body>
</html>