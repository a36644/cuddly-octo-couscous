<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="./assets/css/xulyForm.css">
<?php
require_once("database.php");
require_once("upload_img.php");

if (isset($_REQUEST["submit"]) == false)
    die("<h3>Chưa nhập form</h3>");

$id = $_REQUEST["id"];

$img_small = UploadFile("imgSmall", "assets/img");
$img_large = UploadFile("imgLarge", "assets/img/large");

$title = $_REQUEST["prd-title"];
$price_old = $_REQUEST["prd-price-old"];
$price_new = $_REQUEST["prd-price-new"];
$quantity = $_REQUEST["prd-quantity"];
$sale_off = $_REQUEST["prd-sale-off"];


$ketqua = UpdateProduct($id, $title, $price_old, $price_new, $quantity, $sale_off, $img_small, $img_large);
if ($ketqua == true) {
?>
    <div class="notification">
        <div class="icon brg-sc"><i class="fa-solid fa-check"></i></div>
        <p class="title-sc">SUCCESS</p>
        <p class="msg">Cập nhật sản phẩm thành công</p>
        <div class="ctr">
            <a href="index.php"><button class="brg-sc" style="border-bottom-right-radius: 5px; border-bottom-left-radius: 5px">Trang Chủ</button></a>
        </div>
    </div>
<?php
} else {
    echo "<script type='text/javascript'>alert('That Bai');</script>";
}

?>