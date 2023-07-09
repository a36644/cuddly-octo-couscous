<?php
require_once("database.php");
if (isset($_REQUEST["cartid"]) == false){
    die("<p>chưa có id san pham</p>");
}
$id = $_REQUEST["cartid"];
$ketqua = DeleteProductCart($id);
if ($ketqua == TRUE)
{
    echo "<script type='text/javascript'>alert('Thanh cong');</script>";
}    
else
{
    echo "<script type='text/javascript'>alert('That Bai');</script>"; 
} 
header("location: cart.php");
?>