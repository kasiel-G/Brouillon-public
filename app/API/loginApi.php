<?php
    require "../app/models/userController.php";
    $resp = create();
    echo json_encode($resp);
?>