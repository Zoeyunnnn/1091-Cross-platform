<?php
session_start();
include("db.conn.inc.php");
include("fun-inc.php");
if (isset($_SESSION['userID'])) {
    $sql = "SELECT * FROM `user`";
    $result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php htmlHead()?>
</head>
<body>
    <?php Nav_bar(3)?>
    <div id="cover"></div>
    <table align="center" width="100%">
        <tbody>
            <tr>
				<td align="center">
					<span style="font-size: 2em; line-height: 2.5em; font-weight: bold;">
						周永振 (Yung-Chen Chou)</span>
						<span style="font-size: 1.4em;"> 副教授</span><br><br>
						<span style="font-size: 1.6em;">
                            <a href="http://www.asia.edu.tw/">亞洲大學</a>
							<a href="http://csie.asia.edu.tw/">資訊工程學系</a>
					多媒體安全實驗室</span>
					<br><br><br>
					<table border="0">
						<tbody>
                            <tr height="30px" style="font-size: 1.5em; font-family: '微軟體正黑體'">
							    <td align="center"><b>研究領域: </b>數位浮水印, 資訊隱藏, 影像擷取, 資訊安全</td>
						    </tr>
						    <tr height="30px" style="font-size: 1.5em; font-family: '微軟體正黑體'">
								<td align="center"><b>聯絡電話:</b> +886-4-23323456 ext.48005</td>
							</tr>
							<tr height="30px">
								<td align="center">傳真: 04-2330-5737</td>
							</tr>
							<tr height="70px">
								<td align="center"><font class="style3">電子郵件信箱:</font> 
									<font class="style4"><a href="mailto:yungchen@gmail.com">yungchen@gmail.com</a> 或<br>
									<a href="mailto:yungchen@asia.edu.tw">yungchen@asia.edu.tw</a></font>
								</td>
							</tr>
							<tr style="font-size:1.4em; font-family: '微軟正黑體'; line-height: 1.8em;">
								<td align="center"><font class="style3">郵寄地址: </font>
									台中市霧峰區柳豐路500號</td>
							</tr>
						</tbody>
                    </table>
				</td>
					<!-- <td align="center" style="vertical-align: top;">
						<img src="Images/Jack_new.png" border="2" alt="Jack" style="margin-top:20px; width: 180px;"><br><br>
						<img src="Images/jackWebSite.png" style="margin-top:10px;">
                    </td> -->
			</tr>
		</tbody>
    </table>
    <?php htmlFoot()?>
</body>
</html>
<?php
}else{
    echo "You have no login!";
}