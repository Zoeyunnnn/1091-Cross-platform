<?php 
session_start();
include("db.conn.inc.php");
$userID = mysqli_real_escape_string($link, $_POST["userID"]);
$passPW = mysqli_real_escape_string($link, $_POST['pass']);

$sql = "SELECT * FROM `user` WHERE `email` = '$userID' AND `password` = sha1('$passPW')";
$result = mysqli_query($link, $sql);
$val = $result->num_rows;
if($val == 1){
    $_SESSION['userID'] = $userID;
    echo "<h1>"+$_SESSION['userID']+"成功登入系統</h1>";
    echo "<meta http-equiv='refresh' content='2;url=MainUser.php' />";
}else{
    echo "<h1>帳號或密碼錯誤</h1>";
    echo "<meta http-equiv='refresh' content='2;url=index.php' />";
}