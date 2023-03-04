<?php session_start();  
include('connection.php'); 
$ID = $_SESSION['a_id']; 
$name = $_SESSION['a_username']; 
$level = $_SESSION['a_level']; 
if($level!='A'){ 
Header("Location:logout.php");  
}  
?>

<html lang="en">
<head>


<style>
.myDiv {
  border: 10px outset #343a40;
  background-color: #FFFFFF ;    
  text-align: center;
}
.colerA {
  border: 0px outset #080808 ;
  background-color: #343a40;    
  text-align: center;
}

.span1 {
  float: left;
  width: 0.7em;
  font-size: 700%;
  font-family: algerian, courier;
  line-height: 80%;
}
.span2 {
  float: right;
  width: 0.7em;
  font-size: 700%;
  font-family: algerian, courier;
  line-height: 80%;
}
</style>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body class="colerA">
    
<div class="myDiv">

  <h2>ประเภทสินค้า</h2>
  <p>สามารถเพิ่ม ลบ อัพเดต ข้อมูลในประเภทสินค้า</p>
      <div class="span2"> 
        <a href="logout.php" class=" btn btn-danger mr-4 mb-5  ">Logout</a>
    </div>
</div>

<div class="container mt-5 ">
        <a href="index.php" class="btn btn-success mr-2 mb-4">หน้าหลัก</a>
        <a href="index_add_product.php" class="btn btn-success mr-2 mb-4">เพิ่มสินค้า</a>
        <a href="index_type_product.php" class="btn btn-success mr-2 mb-4">ประเภทสินค้า</a>
        <a href="index_list_product.php" class="btn btn-success mr-2 mb-4">การขาย</a>
        <a href="index_employee_product.php" class="btn btn-success mr-2 mb-4 ">พนักงาน</a>


<table id="mytable"  class="table table-striped table-dark ">


        <thead>

<tr>
<th>NO</th>
<th>Code type</th>
<th>Type Name</th>

<th>Update</th>
<th>Delete</th>
<th>Create</th>

</tr>
</thead>
<tbody>

<?php
include('connection.php');
$sql = "SELECT * FROM tbl_type_product"; //tebel sql
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//แสดงข้อมูลเป็นตาราง
while($row = $result->fetch_assoc()) {

//แสดงข้อความ คือ  echo   ตรางข้อมูล $row['c_no'] . '</td>';  
echo '<tr>';
echo '<td>'. $row['c_no'] . '</td>';
echo '<td>'. $row['S_Name'] . '</td>';
echo '<td>'. $row['S_LastName'] . '</td>';


echo '<td><a role="button"  href="update_type_product.php?c_no='.$row['c_no'].'" class="btn btn-success">update</a></td>';
echo '<td><a role="button"  href="delete_type_product.php?c_no='.$row['c_no'].'" class="btn btn-danger">delete</a></td>';
echo '<td><a role="button"  href="ins_form_type_product.php?c_no='.$row['c_no'].'"class="btn btn-Success">Insert</a></td>';


//echo '<td><a role="button"  href="update.php?c_no='.$row['c_no'].'">update</a></td>';
//echo '<td><a role="button"  href="delete.php?c_no='.$row['c_no'].'">delete</a></td>';

echo '</tr>';
}
} else {
echo " ";
}
$conn->close();
?>
</tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>