<?php
include("../controller/common/redir.php");
include('../model/db_config.php');
$id=$_GET['id'];
$query="Select * From auctions Where id='$id'";
$result = get($query)[0];
$query="Select * From bids Where prop_id='$id' order by bid desc";
$latestBid = get($query);
$errMsg="";
if(empty($latestBid))
{
    $latestBid="No Bid Yet";
}
else
{
    $latestBid=$latestBid[0]['bid'];
}

if(isset($_POST['submit']))
{
    $bid=$_POST['bid'];
    if($bid>$result['cur_price'])
    {
        $query="Select id from users where username='".$_SESSION['user']."'";
        $userid=get($query)[0]['id'];
        $query="Update auctions Set cur_price='$bid' Where id='$id'";
        execute($query);
        $query = "Insert into bids(prop_id, bid, bidder_id) Values('$id','$bid','$userid')";
        execute($query);
        header("Location: ../view/auction.php?id=$id");
    }
    else{
        $errMsg="Bid must be greater than current bid";
    }
}
?>