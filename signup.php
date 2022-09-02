<?php 
session_start();
include("db.conn.inc.php");

$userName = mysqli_real_escape_string($link, $_POST["username"]);
$userID = mysqli_real_escape_string($link, $_POST["userid"]);
$passPW = mysqli_real_escape_string($link, $_POST["password"]);
$Useridentity = mysqli_real_escape_string($link, $_POST["filter"]);
$userPhone = mysqli_real_escape_string($link, $_POST["phone"]);
$time = date("Y-m-d H:i:s");

$sql = "INSERT INTO `user`(`id`, `name`, `email`, `password`, `phone`, `type`, `state`, `create-time`, `modity-time`) VALUES ('$userID', '$userName' ,'$userID', sha1('$passPW'), '$userPhone', '$Useridentity','1','$time','0000-00-00 00:00:00')";
echo $sql;
$result = mysqli_query($link, $sql);
$val = $result->num_rows;
if($val == 0){
    $_SESSION['userID'] = $userID;
    echo "<h1>新增成功，可以登入了</h1>";
    echo "<meta http-equiv='refresh' content='2;url=index.php' />";
}else{
    echo "<h1>新增失敗</h1>";
    echo "<meta http-equiv='refresh' content='2;url=index.php' />";
}