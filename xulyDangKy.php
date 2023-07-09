<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="./assets/css/xulyForm.css">
<?php
require_once("database.php");
//lấy dữ liệu từ form
if (isset($_REQUEST["btn-register"])) {
    $phone = $_REQUEST["phonenumber"];
    $password = $_REQUEST["password"];
    $fullname = $_REQUEST["fullname"];
    $re_name = '^[a-zA-Z]+(\s[a-zA-Z]+){1,4}$';
    if (KiemTraTrungSDT($phone) == true)
    {
        ?>
            <div class="notification">
                <div class="icon"><i class="fa-solid fa-question"></i></div>
                <p class="title-err">ERROR</p>
                <p class="msg">Đăng ký không thành công do số điện thoại này đã được sử dụng.</p>
                <div class="ctr">
                    <a href="register.php"><button class="brg-err" style="border-right: 1px solid #fff; border-bottom-left-radius: 5px">Đăng Ký</button></a>
                    <a href="index.php"><button class="brg-err" style="border-bottom-right-radius: 5px">Trang Chủ</button></a>
                </div>
            </div>
        <?php
    }
    else {
        insertUser($phone, $password, $fullname);
        ?>
            <div class="notification">
                <div class="icon brg-sc"><i class="fa-solid fa-check"></i></div>
                <p class="title-sc">SUCCESS</p>
                <p class="msg">Đăng ký thành công</p>
                <div class="ctr">
                    <a href="login.php"><button class="brg-sc" style="border-right: 1px solid #fff; border-bottom-left-radius: 5px">Đăng Nhập</button></a>
                    <a href="index.php"><button class="brg-sc" style="border-bottom-right-radius: 5px">Trang Chủ</button></a>
                </div>
            </div>
        <?php
        return true;
    }
}
?>