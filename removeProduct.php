<?php
require_once("database.php");
if (isset($_REQUEST["id"]) == false){
    die("<p>chưa có id san pham</p>");
}
$id = $_REQUEST["id"];
$ketqua = DeleteProduct($id);
if ($ketqua == TRUE)
{
    echo "<script type='text/javascript'>alert('Thanh cong');</script>";
}    
else
{
    echo "<script type='text/javascript'>alert('That Bai');</script>"; 
} 

header("location: index.php");
?>