<?php
$name =$_POST["S_Name"];
$LastName= $_POST["S_LastName"];
$Address= $_POST["S_Address"];
$SunjectNamee= $_POST["S_SunjectName"];
include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_list_product (S_Name,S_LastName,S_Address,S_SunjectName) VALUES ('$name','$LastName','$Address','$SunjectNamee')";

if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index_list_product.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index_list_product.php'</script>";
}
$conn->close();
?>