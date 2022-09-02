<?php
session_start();
function htmlHead(){
?>
    <title>ZOE</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/e5f052c807.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="js/jquery-3.5.1.js" type="text/javascript"></script>

<?php
}
function Nav_bar($flag){
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#">ZOE's web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li
                <?php 
                if($flag == 1){
                    echo " class='nav-item bg-light'";
                }else{}
                ?>
                >
                    <a class="nav-link" href="index.php"><i class="fas fa-house-user"></i>Home</a>
                </li>
                <li
                <?php 
                if($flag == 2){
                    echo " class='nav-item bg-light'";
                }else{}
                ?>
                >
                    <a class="nav-link" href="mainPage.php"><i class="fas fa-user-friends"></i>使用者<span class="sr-only">(current)</span></a>
                </li>
                <li <?php 
                if($flag == 3){
                    echo " class='nav-item bg-light'";
                }else{}
                ?>
                >
                    <a class="nav-link" href="MainUser.php"><i class="far fa-list-alt"></i>簡歷</a>
                </li>
                <li <?php 
                if($flag == 4){
                    echo " class='nav-item bg-light'";
                }else{}
                ?>
                >
                    <a class="nav-link" href="book.php"><i class="fas fa-book"></i>著作</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-graduate"></i>常用連結
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://cip.asia.edu.tw/login.php">亞洲大學</a>
                        <a class="dropdown-item" href="https://github.com/">Github</a>
                    </div>
                </li> -->
            </ul>
            <?php
            if ($flag == 1){
            ?>
                <ul class="navbar-nav">
                    <li class="nav-item login">
                        <button class="btn btn-outline-light my-2 my-sm-0" onclick="showLogin();">login</button>
                    </li>
                </ul>
            <?php
            }else{}?>
        </div>
    </nav>
<?php
}
function login(){
?>
    <div id="login_card">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method = "POST" action="logincheck.php">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="userID" class="text-info">UserID:</label><br>
                                <input type="text" name="userID" id="userID" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pass" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:showsignup();" class="text-info">Register here</a>
                                    </div>
                                </div>
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
                        <script>
                            function noLogin(){
                                $('#login_card').css('display','none');
                                $('#cover').css('display','none');
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
function newUsers(){
?>
    <div id="signup_card">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method = "POST" action="signup.php">
                            <h3 class="text-center text-info">Signup</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="userID" class="text-info">UserID:</label><br>
                                <input type="text" name="userid" id="userid" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="filter" class="text-info">Your identity:</label>
                                <select class="filter" name="filter">
                                    <option value="1">Teacher</option>
                                    <option value="2">TA</option>
                                    <option value="3">Student</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="text-info">Phone Number:</label><br>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <a href="javascript:noSignup();" class="btn btn-info btn-md">cancel <i class="fas fa-times-circle"></i></a>
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
        <script>
            function noSignup(){
                $('#cover').css('display','none');
                $('#signup_card').css('display','none');
            }
        </script>
    </div>
<?php 
}
function changeInfo(){
?>
    <div class="modal fade" id="update_card" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
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
                            <input type="text" class="form-control" id="upname" placeholder="Enter username" name="update_uname" required="">
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="email" class="form-control" id="upemail" placeholder="Enter email" name="update_email" required="">
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="phone">電話:</label>
                            <input type="tel" pattern="[0-9]{10}" class="form-control" id="upphone" placeholder="Enter phone" name="update_phone" required="">
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="type">權限:</label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="uptype0" name="update_type" value="0">root
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
        </div>
    </div>
    <!-- <div id="update_card">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method = "POST" action="logincheck.php">
                            <h3 class="text-center text-info">User info</h3>
                            <div class="form-group">
                                <label for="userID" class="text-info">UserID:</label><br>
                                <input type="text" name="userID" id="userID" class="form-control" value="<?php $row[id]?>">
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
    </div> -->
<?php
}
function newbook(){
?>
    <div id="login_card">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method = "POST" action="addBook.php">
                            <h3 class="text-center text-info">Journal</h3>
                            <div class="form-group">
                                <label for="title" class="text-info">Title:</label><br>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="author" class="text-info">Author:</label><br>
                                <input type="text" name="author" id="author" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="author" class="text-info">issue:</label><br>
                                <input type="text" name="issue" id="issue" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="author" class="text-info">Author:</label><br>
                                <input type="text" name="author" id="author" class="form-control">
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
                        <script>
                            function noLogin(){
                                $('#login_card').css('display','none');
                                $('#cover').css('display','none');
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
function htmlFoot(){
?>
    <footer class="card-footer bg-info">
        <div class="icon-container">
            <div class="row">
                <div class="col" style="text-align: center;font-size: 2.5rem;">
                    <i class="fab fa-facebook" style="margin: 9px;"></i>
                    <i class="fab fa-line" style="margin: 9px;"></i>
                    <i class="fab fa-instagram" style="margin: 9px;"></i>
                    <i class="fab fa-twitter" style="margin: 9px;"></i>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-2">
            <div class="row">
                <div class="col">
                    </br>
                    <span id="time"></span>
                </div>
            </div>
            "© 2020 Copyright: Write by myself and open source"
        </div>
    </footer>
    <script>
        function time(){
            let today = new Date();
            $('#time').html("<h5>"+today+"</h5>");
            
            setTimeout("time()",100);
        }
        time();
    </script>
<?php
}
?>