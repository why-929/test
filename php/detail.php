<?php

include "conn.php";
//根据前端传输的sid在数据库中查找那条信息
if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
    $result = $conn->query("select * from taobaogoods where sid = $sid");
    echo json_encode($result->fetch_assoc());//数组转换为json字符串
}
