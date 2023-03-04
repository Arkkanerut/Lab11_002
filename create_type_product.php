<?php
$name =$_POST["S_Name"];
$LastName= $_POST["S_LastName"];

include('connection.php');
//สร้างคา สั่ง sql
$sql = "INSERT INTO tbl_type_product (S_Name,S_LastName) VALUES ('$name','$LastName')";

if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index_type_product.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index_type_product.php'</script>";
}
$conn->close();
?>