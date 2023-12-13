<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "shop_db");

// $db_name = "shop_db";
// $mysql_username = "root";
// $mysql_password = "";
// $server_name = "localhost";
// $conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);


function unique_id()
{
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charLength = strlen($chars);
    $randomString = '';
    for ($i = 0; $i < 20; $i++) {
        $randomString .= $chars[rand(0, $charLength - 1)];
    }
    return $randomString;
}
