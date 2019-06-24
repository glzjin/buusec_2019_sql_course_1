<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/6/21
 * Time: 10:31 PM
 */

include 'config.php';

$mysqli = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

function select($sql) {
    global $mysqli;

    $result_return = array();
    if ($result = mysqli_query($mysqli, $sql)) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($result_return, $row);
        }

        mysqli_free_result($result);
    }

    return $result_return;
}