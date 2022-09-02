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
    <link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>
    <?php Nav_bar(2)?>
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
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
    <div id="cover"></div>
    <div class="card-body" style="text-align:center;">
        <table class="table table-sm table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Type</th>
                    <th scope="col">Create-time</th>
                    <th scope="col"><a href="javascript:show_new();" class="btn btn-info">新增</a></th>
                    <script>
                        function show_new(){
                            $('#cover').css('display','block');
                            $('#signup_card').css('display','block');
                        }
                    </script>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <th scope=\"row\">$i</th>
                        <td>$row[id]</td>
                        <td id=\"name$i\">$row[name]</td>
                        <td id=\"email$i\">$row[email]</td>
                        <td id=\"phone$i\">$row[phone]</td>
                        <td id=\"type$i\">$row[type]</td>
                        <td>" . $row['create-time'] . "</td>
                        <td>
                            <form method='post' action=''>
                                <input type='hidden' name='userID' value='$row[id]' />
                                <button type='button' value='修改' onclick='showChange($i);' data-toggle='modal' data-target='#updateModal' />修改</button>
                            </form>
                            <form onsubmit=\"return confirm('Do you really want to delete this user?');\">
                                <input type='hidden' name='userID' value='$row[id]' />
                                <input type='submit' value='刪除' />
                            </form>
                        </td>
                    </tr>";
                    $i++;
                }
                ?>
            </tbody>     
            <script>
                function showChange(num){
                    // $('#update_card').css('display','block');
                    $('#upname').val($('#name'+num).val());
                }
            </script>
        </table>
    </div>
    <?php newUsers()?>
    <?php htmlFoot()?>
</body>
</html>
<?php
}else{
    echo "You have no login!";
}