<?php
$c_no = $_GET["c_no"];
$S_Name =$_POST["S_Name"];  
$S_LastName =$_POST["S_LastName"];  
 

include('connection.php');
$sql = "UPDATE tbl_type_product SET S_Name='$S_Name', S_LastName='$S_LastName' WHERE c_no=$c_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index_type_product.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index_type_product.php'</script>";
}
$conn->close();
?>