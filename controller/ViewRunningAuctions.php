<?php
include('../model/db_config.php');
$query="Select * From auctions Where status='running'";
$result = get($query);
?>