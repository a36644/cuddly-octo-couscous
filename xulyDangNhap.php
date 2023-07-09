<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/xulyForm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    require("database.php");
    $phone = $_REQUEST["phone"];
    $pass = $_REQUEST["password"];
    $row = CheckLogin($phone, $pass);
    if ($row != NULL)
    {
        if ($row["phone"] == "0999999999") {
            $_SESSION["logined"] = "Admin";
            $_SESSION["id"] = $row["id"];
            $_SESSION["phone"] = $row["phone"];
            $_SESSION["fullname"] = $row["fullname"];
        } else {
            $_SESSION["logined"] = "OK";
            $_SESSION["id"] = $row["id"];
            $_SESSION["phone"] = $row["phone"]; //lấy giá trị cột phone
            $_SESSION["fullname"] = $row["fullname"]; //lấy giá trị cột fullname
        }
    ?>
        <div class="notification">
            <div class="icon brg-sc"><i class="fa-solid fa-check"></i></div>
            <p class="title-sc">SUCCESS</p>
            <p class="msg">Đăng nhập thành công.</p>
            <div class="ctr">
                <a href="index.php"><button class="brg-sc" style="border-bottom-right-radius: 5px; border-bottom-left-radius: 5px">Trang Chủ</button></a>
            </div>
        </div>
    <?php

    } else {
        $_SESSION["logined"] = "";
    ?>
        <div class="notification">
            <div class="icon"><i class="fa-solid fa-question"></i></div>
            <p class="title-err">ERROR</p>
            <p class="msg">Đăng nhập không thành công</p>
            <div class="ctr">
                <a href="login.php"><button class="brg-err" style="border-bottom-left-radius: 5px; border-right: 1px solid #fff;">Đăng Nhập</button></a>
                <a href="index.php"><button class="brg-err" style="border-bottom-right-radius: 5px">Trang Chủ</button></a>
            </div>
        </div>
    <?php
    }
    ?>
</body>

</html>