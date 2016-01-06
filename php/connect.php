<?php
$my_host = "localhost";
$my_user = "pbox";
$my_password = "pbox123";
$my_db = "db_project_box";

$mysqli = new mysqli($my_host, $my_user, $my_password, $my_db);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

?>
