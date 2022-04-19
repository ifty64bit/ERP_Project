<?php
    include("../model/db_config.php");
    $name=$_GET['name'];
    $query="SELECT *, u1.username as soldBy, u2.username as soldTo FROM auctions a1
    LEFT JOIN users u1
    ON a1.seller_id=u1.id
    LEFT JOIN users u2
    ON a1.sold_to=u2.id
    WHERE a1.status='sold' And ( u1.username LIKE '%$name%' OR u2.username LIKE '%$name%' )";
    echo json_encode(get($query));
?>