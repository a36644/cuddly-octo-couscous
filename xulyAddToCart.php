<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="./assets/css/xulyForm.css">
<?php
    session_start();
    if (isset($_REQUEST["id"]) == false)
        die("<p>Chưa có id sản phẩm</p>");
    $id = $_REQUEST["id"];
    if ($id == "" || is_numeric($id) == false)
        die("<p>id không được rỗng và phải là số</p>");

    require_once("database.php");
    $row = getProduct($id);
    $hinhanh = $row["img"];
    $ten = $row["title"];
    $gia = $row["pricenew"];
    $iduser = $_SESSION["id"];
    
    $kq = addToCart($hinhanh,$ten,$gia,$iduser);
    if ($kq == true)
    {
        ?>
            <div class="notification">
                <div class="icon brg-sc"><i class="fa-solid fa-check"></i></div>
                <p class="title-sc">SUCCESS</p>
                <p class="msg">Thành Công</p>
                <div class="ctr">
                    <a href="cart.php"><button class="brg-sc" style="border-right: 1px solid #fff; border-bottom-left-radius: 5px">Giỏ Hàng</button></a>
                    <a href="index.php"><button class="brg-sc" style="border-bottom-right-radius: 5px">Trang Chủ</button></a>
                </div>
            </div>
        <?php
    }
    else {
        echo "<script type='text/javascript'>alert('That Bai');</script>";
    }
?>
