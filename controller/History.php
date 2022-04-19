<?php
include("../controller/common/redir.php");
include("../model/db_config.php");
$username=$_SESSION['user'];
$sql="SELECT * FROM auctions WHERE seller_id=(SELECT id FROM users WHERE username='$username') or sold_to=(SELECT id FROM users WHERE username='$username')";
$data=get($sql);
?>