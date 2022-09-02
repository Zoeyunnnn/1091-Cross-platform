<?php
header ("Access-Control-Allow-Origin: *") ;
$link = mysqli_connect(
"210.70.80.21", //IP
"k108021589", //sqluser
"xohRoo4u", //sqlpasswd
"k108021589" //database name
);
if (!$link) {
    echo "Error: unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_error() . PHP_EOL;
    exit;
}
$link->set_charset("utf8");
?>