<?php
    //include("../controller/common/fileIO.php");
    include("../model/db_config.php");
    $username=$_GET['username'];
    $query="Delete from users where username='$username'";
    $result=execute($query);
    if($result!=true)
    {
        print_r($result);
    }
    else{
        header("Location: ../view/ManageUser.php");
    }
?>