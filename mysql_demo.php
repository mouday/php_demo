<?php

$server_name = "127.0.0.1:3306";
$username = "root";
$password = "123456";
$database = "demo";
$port = 3306;

// 创建连接
$conn = new mysqli($server_name, $username, $password, $database, $port);

// 插入数据
$result = $conn->query("insert student(name, age) values('小明', 23), ('小红', 24), ('小白', 25)");
echo $result; // 1

// 读取数据
$result = $conn->query("select * from student;");

while ($row = $result->fetch_assoc()) {
    echo $row["name"], $row["age"];
}
// 小明23小红24小白25

// 更新数据
$result = $conn->query("update student set age=30 where id=3");
echo $result; // 1

// 删除数据
$result = $conn->query("delete from student where id=3");
echo $result; // 1

// 关闭连接
$conn->close();
