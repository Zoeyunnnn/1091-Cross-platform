<?php
    session_start();
    include("db.conn.inc.php");
    include("fun-inc.php");

    $userID = mysqli_real_escape_string($link, $_POST["userID"]);
    $sql = "SELECT * FROM `user` WHERE `id` = $userID";
    echo $sql;
    $result = mysqli_query($link, $sql);
    // $val = $result->num_rows;
    while($row = mysqli_fetch_assoc($result)){
        $_SESSION['userID'] = $userID;
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            '?><?php htmlHead();'        
            <link rel="stylesheet" type="text/css" href="css/user.css">
        </head>
        <body>
            '?><?php Nav_bar(2);'
            <div id="cover"></div>
            <div class="card-body" style="text-align:center;">
                <div id="update_card">
                    <div class="container">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-6">
                                <div id="login-box" class="col-md-12">
                                    <form id="login-form" class="form" method = "POST" action="logincheck.php">
                                        <h3 class="text-center text-info">User info</h3>
                                        <div class="form-group">
                                            <label for="userID" class="text-info">UserID:</label><br>
                                            <input type="text" name="userID" id="userID" class="form-control" value="'?><?php $row[id];'">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="text-info">E-mail:</label><br>
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="text-info">Phone:</label><br>
                                            <input type="text" name="phone" id="phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="javascript:noLogin();" class="btn btn-info btn-md">cancel<i class="fas fa-times-circle"></i></a>
                                                </div>
                                                <div class="col">
                                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html> ';
    }
?>
<div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">修改</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="php/updateUserInfo.php" class="was-validated" method="POST">
                    <div class="form-group" id="update_div_id"><input type="hidden" value="1" class="form-control" id="update_id" name="update_id"></div>    
                    <div class="form-group">
                        <label for="uname">姓名:</label>
                        <input type="text" class="form-control" id="update_uname" placeholder="Enter username" name="update_uname" required="">
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="email" class="form-control" id="update_email" placeholder="Enter email" name="update_email" required="">
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="phone">電話:</label>
                        <input type="tel" pattern="[0-9]{10}" class="form-control" id="update_phone" placeholder="Enter phone" name="update_phone" required="">
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                        <div class="form-group">
                            <label for="type">權限:</label>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="update_type0" name="update_type" value="0">root
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="update_type1" name="update_type" value="1">教師
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="update_type2" name="update_type" value="2">助教
                              </label>
                            </div>
                            <div class="form-check-inline">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="update_type3" name="update_type" value="3">學生
                              </label>
                            </div>
                        </div>
                                            <button type="submit" class="btn btn-primary">送出</button>
                </form>
            </div>
        </div>