<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/addProduct.css">
    <title>Document</title>
</head>

<body>
    <div style="margin-top: 50px;">
        <h3>Add New Product</h3>
        <form class="add-prd" action="xulyAddProduct.php" method="post" enctype="multipart/form-data">
            <div class="div-inp">
                <label for="prd-title">Product Title</label> <br>
                <div class="notify-inp">
                    <input type="text" name="prd-title" id="prd-title" onkeyup="checkTitle()">
                    <div id="err-title" class="err"></div>
                </div>
            </div>
            <div class="div-inp">
                <label for="prd-price-old">Price Old</label> <br>
                <div class="notify-inp">
                    <input type="text" name="prd-price-old" id="prd-price-old" onkeyup="checkPriceOld()">
                    <div id="err-price-old" class="err"></div>
                </div>
            </div>
            <div class="div-inp">
                <label for="prd-price-new">Price New</label> <br>
                <div class="notify-inp">
                    <input type="text" name="prd-price-new" id="prd-price-new" onkeyup="checkPriceNew()">
                    <div id="err-price-new" class="err"></div>
                </div>
            </div>
            <div class="div-inp">
                <label for="prd-quantity">Quantity</label> <br>
                <div class="notify-inp">
                    <input type="text" name="prd-quantity" id="prd-quantity" onkeyup = "checkQuantity()" >
                    <div id="err-quantity" class="err"></div>
                </div>
            </div>
            <div class="div-inp">
                <label for="prd-sale-off">Sale Off</label> <br>
                <div class="notify-inp">
                    <input type="range" min="1" max="100" value="5" name="prd-sale-off" id="prd-sale-off" onmousemove="saleOff()">
                    <div id="err-sale-off" class="err"></div>
                </div>
            </div>
            <div class="div-inp">
                Image small:
                <input type="file" name="imgSmall" id="imgSmall" onchange="checkAddImgSmall()" value="">
            </div>
            <div class="div-inp">
                Image large:
                <input type="file" name="imgLarge" id="imgLarge" onchange="checkAddImgLarge()" value=""> 
            </div>
            <input type="submit" class="btn-sbm" name="submit" id="submit" disabled value="Submit" readonly onclick="checkAddPrd()"></input>
        </form>
    </div>
</body>
<script src="./checkPrdouct.js"></script>

</html>