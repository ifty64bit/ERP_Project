<?php
include("../model/db_config.php");
$username=$_GET['uname'];
$query="SELECT * FROM users WHERE username='$username'";
$res=get($query);
if(count($res)>0)
{
    echo "true";
}
else
{
    echo "false";
}
?>