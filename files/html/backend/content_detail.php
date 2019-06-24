<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/6/21
 * Time: 10:20 PM
 */

include "db.php";

$id = $_GET['id'];
$result = select("select title, content from contents where id=$id;");
echo(json_encode(isset($result[0]) ? $result[0] : []));