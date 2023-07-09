<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="./assets/css/xulyForm.css">
<?php
require_once("database.php");
require_once("upload_img.php");
//lấy dữ liệu từ form
if (isset($_REQUEST["submit"])) {
    $img = UploadFile("imgSmall", "./assets/img");
    $imglarge = UploadFile("imgLarge","./assets/img/large");
    $title = $_REQUEST["prd-title"];
    $price_old = $_REQUEST["prd-price-old"];
    $price_new = $_REQUEST["prd-price-new"];
    $sale_off = $_REQUEST["prd-sale-off"];
    $quantity = $_REQUEST["prd-quantity"];
    $ketqua = addProduct($title, $price_old, $price_new, $quantity, $sale_off, $img, $imglarge);
    if ($ketqua == true) {
    ?>
        <div class="notification">
            <div class="icon brg-sc"><i class="fa-solid fa-check"></i></div>
            <p class="title-sc">SUCCESS</p>
            <p class="msg">Thêm sản phẩm thành công</p>
            <div class="ctr">
                <a href="addProduct.php"><button class="brg-sc" style="border-right: 1px solid #fff; border-bottom-left-radius: 5px">Thêm Sản Phẩm</button></a>
                <a href="index.php"><button class="brg-sc" style="border-bottom-right-radius: 5px">Trang Chủ</button></a>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="notification">
            <div class="icon"><i class="fa-solid fa-question"></i></div>
            <p class="title-err">ERROR</p>
            <p class="msg">Thêm sản phẩm không thành công. Bạn đã nhập đủ thông tin sản phẩm?</p>
            <div class="ctr">
                <a href="" onclick="history.back()"><button class="brg-err" style="border-right: 1px solid #fff; border-bottom-left-radius: 5px">Thêm sản phẩm</button></a>
                <a href="index.php"><button class="brg-err" style="border-bottom-right-radius: 5px">Trang Chủ</button></a>
            </div>
        </div>
    <?php    
    }
        
}
?>
<a href="index.php"> Danh sách sản phẩm </a>