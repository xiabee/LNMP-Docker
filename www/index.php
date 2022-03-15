<?php
include "./config.php";
error_reporting(-1);
highlight_file(__FILE__);

$conn = mysqli_connect($hostname, $username, $password, $database);
   if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_errno);
    # php版本升级，报错处理暂时没有处理好
} 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from users where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_array($result);
        echo "<h3>" . $row['username'] . "</h3><br>";
        echo "<h3>" . $row['passwd'] . "</h3>";
    }
    else {
        die('<br>.Could not connect: '.mysqli_errno($conn));
        # php版本升级，报错处理暂时没有处理好
    }
}
mysqli_close($con); 