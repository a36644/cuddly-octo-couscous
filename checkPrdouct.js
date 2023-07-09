function checkTitle(){
    title = document.getElementById("prd-title");
    err = document.getElementById("err-title");
    btn = document.getElementById("submit");
    if(title.value == ""){
        err.innerHTML = "Bạn chưa nhập tên sản phẩm";
        btn.classList.remove("enable");
        btn.disabled = true;
        return false;
    } else {
        err.innerHTML = "";
        btn.classList.add("enable");
        btn.disabled = false;
        return true;
    }
}

function checkPriceOld(){
    price = document.getElementById("prd-price-old");
    err = document.getElementById("err-price-old");
    btn = document.getElementById("submit");
    if(price.value == ""){
        err.innerHTML = "Bạn chưa nhập giá gốc của sản phẩm";
        btn.classList.remove("enable");
        btn.disabled = true;
        return false;
    } else if(isNaN(price.value) == true){
        err.innerHTML = "Kiểu dữ liệu không hợp lệ";
        btn.classList.remove("enable");
        btn.disabled = true;
        return false;
    } else {
        err.innerHTML = "";
        btn.classList.add("enable");
        btn.disabled = false;
        return true;
    }
}

function checkPriceNew(){
    price = document.getElementById("prd-price-new");
    err = document.getElementById("err-price-new");
    btn = document.getElementById("submit");
    if(price.value == ""){
        err.innerHTML = "Bạn chưa nhập giá mới cho sản phẩm";
        btn.classList.remove("enable");
        btn.disabled = true;
        return false;
    } else if(isNaN(price.value) == true){
        err.innerHTML = "Kiểu dữ liệu không hợp lệ";
        btn.classList.remove("enable");
        btn.disabled = true;
        return false;
    } else {
        err.innerHTML = "";
        btn.classList.add("enable");
        btn.disabled = false;
        return true;
    }
}

function checkQuantity() {
    quantity = document.getElementById("prd-quantity");
    err = document.getElementById("err-quantity");
    btn = document.getElementById("submit");
    if(quantity.value == ""){
        err.innerHTML = "Bạn chưa nhập số lượng";
        btn.classList.remove("enable");
        btn.disabled = true;
        return false;
    }else if(isNaN(quantity.value) == true){
        err.innerHTML = "Kiểu dữ liệu không hợp lệ";
        btn.classList.remove("enable");
        btn.disabled = true;
        return false;
    } else {
        err.innerHTML = "";
        btn.classList.add("enable");
        btn.disabled = false;
        return true;
    }
}

function checkAddImgSmall(){
    img = document.getElementById("imgSmall");
    btn = document.getElementById("submit");
    if(img.value == ""){
        btn.classList.remove("enable");
        btn.disabled = true;
        return false;
    } else {
        btn.classList.add("enable");
        btn.disabled = false;
        return true;
    }
}

function checkAddImgLarge(){
    img = document.getElementById("imgLarge");
    btn = document.getElementById("submit");
    if(img.value == ""){
        btn.classList.remove("enable");
        btn.disabled = true;
        return false;
    } else {
        btn.classList.add("enable");
        btn.disabled = false;
        return true;
    }
}

function saleOff(){
    percent = document.getElementById("prd-sale-off");
    err = document.getElementById("err-sale-off");
    err.innerHTML = percent.value + "%";
}

function checkAddPrd() {
    checkTitle();
    checkPriceOld();
    checkPriceNew();
    checkQuantity();
    checkAddImgSmall();
    checkAddImgLarge();
}
