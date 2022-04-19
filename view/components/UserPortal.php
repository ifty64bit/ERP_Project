<?php
 include("../model/db_config.php");
 $sql="Select * From users Where username='".$_SESSION['user']."'";
 $result=get($sql)[0];
?>
<div class="mx my flex-center">

        <a href="./AddAuction.php">
            <div class="card">
                <h3>Sell Property</h3>
            </div>
        </a>

        <a href="./ViewRunningAuctions.php">
            <div class="card">
                <h3>View Running Auction</h3>
            </div>
        </a>

        <a href="./History.php">
            <div class="card">
                <h3>History</h3>
            </div>
        </a>

        <a href="./Profile.php">
            <div class="card">
                <h3>Profile</h3>
            </div>
        </a>

        <div>
            <div class="card">
                <h3>Balance: <?php echo $result['balance'] ?></h3>
            </div>
        </div>

    </div>