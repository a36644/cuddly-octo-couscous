<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cart.css">
    <title>My Cart</title>
</head>

<body>
    <h3>My Cart</h3>
    <div class="mycart">
    <?php
    require("database.php");
    $rows = getProductInCart($_SESSION["id"]);
    if ($rows == null)
    {
    ?>
        <div>
            <img src="./assets/img/cart.png" width="900" alt="">
            <p style="font-size:20px; text-align: center; font-weight:600;">Chưa có sản phẩm nào</p>
        </div>
    <?php    
    }
    foreach ($rows as $row) {
    ?>
        <ul class="cart-list">
            <li class="cart-item">
                <img class="cart-item-img" src="./assets/img/<?= $row["hinhanh"] ?>" alt="">
                <div class="cart-item-info">
                    <div class="cart-item-info-head">
                        <h4 class="cart-item-name"><?= $row["ten"]?></h4>
                        <div>
                            <span class="cart-item-price"><?= number_format($row["gia"], "0", ".", ".") ?>VNĐ</span>
                        </div>
                    </div>
                    <div class="cart-item-info-body">
                        <a href="removeProductCart.php?cartid=<?=$row["cartid"]?>" style="text-decoration: none; color:#fff;"><span class="cart-item-remove" onclick="return confirm('Bạn có muốn xóa sản phẩm này?')">Xóa</span></a>
                    </div>
                </div>
            </li>
        </ul>
    <?php
    }
    ?>
        <div style="text-align: center;">
            <a href="index.php"><button class="btn-index">Trang Chủ</button></a>
        </div>
    </div>
</body>
<script src="./function.js"></script>
</html>