<?php
    include("../controller/common/redir.php");
    include("../model/db_config.php");
    $query="Select * from users";
    $data=get($query);
?>