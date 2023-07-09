<?php
function ConnectDB(){
    $conn = null;
    try {
        $conn = new PDO("mysql:host=localhost:3306;dbname=shoppe", "root", "");
        $conn->query("SET NAMES UTF8");
    } catch (PDOException $ex) {
        echo "<p>" . $ex->getMessage() . "</p>";
        die("<h3>Loi Ket Noi CSDL</h3>");
    }
    return $conn;
}
function getListData(){
    $conn = ConnectDB();
    $sql = "SELECT * FROM tbShoppe";

    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();
    if($ketqua == false)
        return false;
    else {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
        return $rows;
    }
}
function insertUser($phone,$password,$fullname){
    $conn = ConnectDB();

    $sql = "INSERT INTO tbUser VALUES(NULL,?,?,?)";
    
    $pdo_stm = $conn->prepare($sql);
    $data = [$phone,$password,$fullname];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}
function numberK($a){
    $str = (string)$a;
    if(strlen($str)>3){
        $resutl = substr($str,0,-3) . "k";
        return $resutl;
    }
    else 
        return $str;
}
function KiemTraTrungSDT($phone)
{
    $conn = ConnectDB();
    $sql = "SELECT * FROM tbUser WHERE phone=?";
    //tạo đối tượng PDOStatement  để thực hiện sql
    $pdo_stm = $conn->prepare($sql);
    $data = [$phone];
    $ketqua = $pdo_stm->execute($data);//thực thiện lệnh sql ở dòng trên và trả về TRUE/FALSE
    if($ketqua==TRUE)
    {
        $n = $pdo_stm->rowCount();
        if($n>0)//Nếu có dữ liệu
            return TRUE;
        else    
            return FALSE;
    }
    else {
        return FALSE;
    }
}
function CheckLogin($phone,$password)
{
    $conn = ConnectDB();
    $sql = "SELECT * FROM tbUser WHERE phone=? AND password=?";
    
    $pdo_stm = $conn->prepare($sql);
    $data = [$phone,$password];
    $ketqua = $pdo_stm->execute($data);
    if($ketqua==TRUE)
    {
        $n = $pdo_stm->rowCount();
        if($n>0)
            return $pdo_stm->fetch();
        else    
            return NULL;
    }
    else {
        return FALSE;
    }
}
function addProduct($title,$price_old,$price_new,$quantity,$sale_off,$img,$img_large)
{
    $conn = ConnectDB();
    //$sql = "INSERT INTO tbUser VALUES(NULL,'$username','$password','$fullname')";
    $sql = "INSERT INTO tbShoppe VALUES(NULL,?,?,?,?,?,?,?)";
    //tạo đối tượng PDOStatement  để thực hiện sql
    $pdo_stm = $conn->prepare($sql);
    $data = [$title,$price_old,$price_new,$quantity,$sale_off,$img,$img_large];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}

function DeleteProduct($id)
{
    $conn = ConnectDB();
    if($conn==null)
        return null;
    $sql = "DELETE FROM tbShoppe WHERE id=?";
    $pdo_stm = $conn->prepare($sql);
    
    $data =[$id];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}

function getProduct($id) {
    $conn = ConnectDB();
    $sql = "SELECT * FROM tbShoppe WHERE id=?";
    $pdo_stm = $conn->prepare($sql);

    $data =[$id];
    $ketqua = $pdo_stm->execute($data);
    if($ketqua==false)
        return null;
    else
    {
        $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
        return $row;
    } 
}

function UpdateProduct($id,$title,$price_old,$price_new,$quantity,$sale_off,$img,$img_large){
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "UPDATE tbShoppe 
            SET title=?,priceold=?,pricenew=?,soldquantity=?,saleoff=?,img=?,imglarge=? WHERE id=?";
    $pdo_stm = $conn->prepare($sql);
    $data = [$title,$price_old,$price_new,$quantity,$sale_off,$img,$img_large,$id];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}

function getProductInCart($id){
    $conn = ConnectDB();
    $sql = "SELECT * FROM tbcart WHERE id=?";
    $pdo_stm = $conn->prepare($sql);
    $data =[$id];
    $kq = $pdo_stm->execute($data);
    if($kq==false)
        return null;
    else
    {
        $row = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
        return $row;
    }
}

function addToCart($hinhanh,$ten,$gia,$iduser){
    $conn = ConnectDB();
    $sql = "INSERT INTO tbcart VALUES(NULL,?,?,?,?)";
    $pdo_stm = $conn->prepare($sql);
    $data = [$hinhanh,$ten,$gia,$iduser];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}

function DeleteProductCart($id)
{
    $conn = ConnectDB();
    if($conn==null)
        return null;
    $sql = "DELETE FROM tbcart WHERE cartid=?";
    $pdo_stm = $conn->prepare($sql);
    
    $data =[$id];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}

