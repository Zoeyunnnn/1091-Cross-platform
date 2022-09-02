<?php 
session_start();
include("db.conn.inc.php");
include("fun-inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php htmlHead()?>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <script>
        function showLogin(){
            $('#login_card').css('display','block');
            $('#cover').css('display','block');
        }     
        function showsignup(){
            $('#login_card').css('display','none');
            $('#cover').css('display','block');
            $('#signup_card').css('display','block');
        }   
    </script>
    <div id="cover"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#">ZOE's web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li class='nav-item bg-light'>
                    <a class="nav-link" href="index.php"><i class="fas fa-house-user"></i>Home</a>
                </li>
                <!-- <li>
                    <a class="nav-link" href="#"><i class="fas fa-user-friends"></i>使用者<span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link" href="#"><i class="far fa-list-alt"></i>簡歷</a>
                </li>
                <li>
                    <a class="nav-link" href="#"><i class="fas fa-book"></i>著作</a>
                </li> -->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item login">
                    <button class="btn btn-outline-light my-2 my-sm-0" onclick="showLogin();">login</button>
                </li>
            </ul>
        </div>
    </nav>
    <div class="card-body">
        <div class="row">
            <div class="slider_container">
                <div>
                    <img src="img/chihiro042.jpg" class="rounded" style="border-radius: 15px;" width="100%" alt="pure css3 slider" />
                    <span class="info">千與千尋:http://www.ghibli.jp/works/chihiro/#frame</span>
                </div>
                <div>
                    <img src="img/chihiro043.jpg" class="rounded" style="border-radius: 15px;" width="100%" alt="pure css3 slider" />
                    <span class="info">千與千尋:http://www.ghibli.jp/works/chihiro/#frame</span>
                </div>
                <div>
                    <img src="img/chihiro014.jpg" class="rounded" style="border-radius: 15px;" width="100%" alt="pure css3 slider" />
                    <span class="info">千與千尋:http://www.ghibli.jp/works/chihiro/#frame</span>
                </div>
                <div>
                    <img src="img/chihiro003.jpg" class="rounded" style="border-radius: 15px;" width="100%" alt="pure css3 slider" />
                    <span class="info">千與千尋:http://www.ghibli.jp/works/chihiro/#frame</span>
                </div>
                <div>
                    <img src="img/chihiro034.jpg" class="rounded" style="border-radius: 15px;" width="100%" alt="pure css3 slider" />
                    <span class="info">千與千尋:http://www.ghibli.jp/works/chihiro/#frame</span>
                </div>
                <div class="col-sm-2">
                    <div class="card-text">ZOE</div>
                </div>
            </div>
        </div>
    </div>
    <?php login()?>
    <?php newUsers()?>
    <?php htmlFoot()?>
</body>
</html>
