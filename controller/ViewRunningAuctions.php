<?php
include('../model/db_config.php');
//need to maping the id to the auction id
$query="Select * From auctions Where status='active'";
$result = get($query);
?>