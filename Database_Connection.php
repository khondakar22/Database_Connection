
<html>
    <header>

    </header>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="GET">
            <input type="submit" value="Database_connection" name="btn"/>
            <input type="submit" value="HostName" name="btn1"/>
            <input type="submit" value="PortName" name="btn2"/>
        </form>

    </body>
</html>

<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db_connect = isset($_GET['btn']);
$host = isset($_GET['btn1']);
$port = isset($_GET['btn2']);

//Database Connection by creating object

$mysqli = new mysqli("127.0.0.1", "root", "", "test_purpose", 3306);
$mysqli1 = new mysqli("localhost", "root", "", "test_purpose", 3306);

switch ($mysqli || $mysqli1) {
    case $db_connect :
        if (isset($mysqli->mysqli_connect_errno)) {
            echo "Faild to connect </br>" . mysqli_connect_error();
        }
        $res = mysqli_query($mysqli, "SELECT 'Connection Successfull' AS _msg FROM DUAL");
        $row = mysqli_fetch_assoc($res);
        echo $row['_msg'];
        break;
    case $host:
        if (isset($mysqli1->mysqli_connect_errno)) {
            echo "Faild to connect </br>" . mysqli_connect_error();
        }
        echo $mysqli1->host_info . "\n";
        break;
    default :
        if (isset($mysqli->mysqli_connect_errno)) {
            echo "Faild to connect </br>" . mysqli_connect_error();
        }
        echo $mysqli->host_info . "\n";
}

