<?php
session_start();
include("db.conn.inc.php");
include("fun-inc.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php htmlHead()?>
</head>
<body>
    <?php Nav_bar(4)?>
    <div class="wrapper" style="min-height: 100%;">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="book.php" role="tab" aria-controls="home" aria-selected="false">Journal</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="conference.php" role="tab" aria-controls="profile" aria-selected="true">Conference</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="journal_tab" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row" style="margin:3px 0;">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <form action="searchPaper.php" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Paper">
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ------------------  Conference Tab  ----------------- -->
            <div class="tab-pane fade show active" id="conference_tab" role="tabpanel" aria-labelledby="home-tab">
            <div class="row" style="margin:3px 0;">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <form action="searchPaper.php" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Paper">
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row" style="margin:3px 0;">
                    <ul class="list-group">
                    <?php
                    $sql = "SELECT * FROM `Conference`";
                    $result = mysqli_query($link, $sql);
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li class='list-group-item'>". $i . '、' . $row[author]."(".$row[year]."): \"".$row[title].",\"<i>".$row[venue]."\"</i>, Vol. ".$roe[id].", ".$row[city].", ".$row[country].", pp. ".$row[page]."</li>";
                    }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php htmlFoot()?>
</body>
</html>