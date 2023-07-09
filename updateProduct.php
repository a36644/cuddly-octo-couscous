<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/addProduct.css">
    <title>Update Product</title>
</head>

<body>
    <?php
    if (isset($_REQUEST["id"]) == false)
        die("<p>Chưa có id sản phẩm</p>");
    $id = $_REQUEST["id"];
    if ($id == "" || is_numeric($id) == false)
        die("<p>id không được rỗng và phải là số</p>");
    
    require_once("database.php");
    $row = getProduct($id);
    ?>
    <div style="margin-top: 30px;">
        <h3>Update Product</h3>
        <form class="add-prd" action="xulyUpdateProduct.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $row["id"]?>">
            <div class="div-inp">
                <label for="prd-title">Product Title</label> <br>
                <div class="notify-inp">
                    <input type="text" name="prd-title" id="prd-title" value="<?= $row["title"] ?>" onkeyup="checkTitle()">
                    <div id="err-title" class="err"></div>
                </div>
            </div>
            <div class="div-inp">
                <label for="prd-price-old">Price Old</label> <br>
                <div class="notify-inp">
                    <input type="text" name="prd-price-old" id="prd-price-old" value="<?= $row["priceold"] ?>" onkeyup="checkPriceOld()">
                    <div id="err-price-old" class="err"></div>
                </div>
            </div>
            <div class="div-inp">
                <label for="prd-price-new">Price New</label> <br>
                <div class="notify-inp">
                    <input type="text" name="prd-price-new" id="prd-price-new" value="<?= $row["pricenew"] ?>" onkeyup="checkPriceNew()">
                    <div id="err-price-new" class="err"></div>
                </div>
            </div>
            <div class="div-inp">
                <label for="prd-quantity">Quantity</label> <br>
                <div class="notify-inp">
                    <input type="text" name="prd-quantity" id="prd-quantity" value="<?= $row["soldquantity"] ?>" onkeyup = "checkQuantity()" >
                    <div id="err-quantity" class="err"></div>
                </div>
            </div>
            <div class="div-inp">
                <label for="sale-off">Sale Off</label> <br>
                <div class="notify-inp">
                    <input type="range" min="1" max="100" value="5" name="prd-sale-off" id="prd-sale-off" onmousemove="saleOff()">
                    <div id="err-sale-off" class="err"></div>
                </div>
            </div>
            <div class="div-inp">
                <p style="margin: 0 15px 0 0; float:left;">Current Image</p>
                <?php $img = $row["img"] == "" ? "no-image.png" : $row["img"]; ?>
                <img src="assets/img/<?= $img ?>" width="80"> <br>
                <input type="text" name="currentImg" id="currentImg" value="<?= $row["img"] ?>" readonly>
            </div>
            <div>
                <p style="margin: 0;">New Image</p>
                <input type="file" name="imgSmall" id="imgSmall" onchange="checkAddImgSmall()" value="">
            </div>
            <div>
                <p style="margin: 0;">Image large</p>
                <input type="file" name="imgLarge" id="imgLarge" onchange="checkAddImgLarge()" value="">
            </div>
            <input type="submit" class="btn-sbm" name="submit" id="submit" disabled value="Submit" readonly onclick="checkAddPrd()"></input>
        </form>
    </div>
</body>
<script src="checkPrdouct.js"></script>
</html>