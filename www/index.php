<?php
// error_reporting(0);
highlight_file(__FILE__);
$conn = mysqli_connect('sql_mysql', 'test', 'test', 'security');
if (mysqli_connect_errno($conn)) 
{
    die("Could not connect: " . mysqli_connect_error()); 
}  

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (stristr($id, 'select') === false) {
        $sql = "select * from users where id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_array($result);
            echo "<h3>" . $row['username'] . "</h3><br>";
            echo "<h3>" . $row['passwd'] . "</h3>";
        }
        else {
            die('<br>.Could not connect: '.mysqli_error($conn));
        }
    }
}
mysqli_close($con); 