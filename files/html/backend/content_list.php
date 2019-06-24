<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/6/21
 * Time: 10:20 PM
 */

include "db.php";

$result = select("select id, title from contents;");
echo(json_encode($result));