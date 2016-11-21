<?php
    $db_connection = pg_connect("host=ec2-54-243-195-160.compute-1.amazonaws.com dbname=d97mm5bj8rc9vk user=cikipoqlcigamg password=S3QJwJeWKDq_vL0S0CMD_Ubfml");
    $result = pg_query($db_connection, "SELECT * FROM prtable");
    print_r($result);

?>
