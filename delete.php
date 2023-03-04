
<?php
include('connection.php');
$c_no=$_GET['c_no'];
$sql = "DELETE FROM tbl_customers WHERE c_no=$c_no";
if ($conn->query($sql)) {
    echo "<script>alert('Record deleted Successfully!');</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
$conn->close();
?>