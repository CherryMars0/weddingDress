<?php
function sql_conn($dbName)
{
    $host = "localhost:3309";
    $user = "root";
    $pwd = "";
    $conn = new mysqli($host, $user, $pwd, $dbName);
    if ($conn->connect_error) {
        return die($conn->connect_error . "数据库连接失败");
    } else {
        return $conn;
    }
};

function sql_conn_query($dbName, $sql)
{
    $res = sql_conn($dbName)->query($sql);
    $data = $res->fetch_all();
    sql_conn($dbName)->close();
    if (empty($data)) {
        return null;
    } else {
        return $data;
    }
};

function sql_conn_insert($dbName, $sql)
{
    $res = sql_conn($dbName)->query($sql);
    sql_conn($dbName)->close();
    return $res;
}
