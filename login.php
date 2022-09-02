<?php include("db.conn.inc.php");
$userID = myaqli_real_escape_string($link, $_POST["username"]);
$passPW = myaqli_real_escape_string($link, $_POST["pass"]);

$sql = ""
?>
