<?php 
    session_start();
    include('connection.php');
    $id = $_GET['c_no'];
    $sql = "select * from tbl_employee_product where c_no='$id'";
    $result = $conn->query($sql);
    
    $row;
    $row = $result->fetch_assoc();
   $_SESSION['c_no'] = $id;
    
?>

<!DOCTYPE html>
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
.pand{
    padding-right: 350px;
    padding-left: 350px;
    padding-bottom: 250px;
    
}
</style>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Customer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body class="colerA">

</style>
    <div class="container sm-1">
        <h1 class="mt-3"style="color:MediumSeaGreen ;text-align: center;">แก้ไขข้อมูล พนักงาน</h1>
        <hr>
        <form class="pand" action="upd_save_employee_product.php?c_no=<?=$_GET["c_no"];?>" enctype="multipart/form-data"   method="POST">
            
            
            <div  style ="background-color: #696969; padding-bottom: 50px; padding-top: 50px;">
                <div class="text-center">
                    <label for="fname"  style="color:MediumSeaGreen;">รหัสพนักงาน</label>
                    <br>
                    <input type="text"  name="S_Name" value="<?php echo $row['S_Name']; ?>">
                
                </div>
                <br>
                <div class="text-center" >
                    <label   style="color:MediumSeaGreen;">ชื่อพนักงาน</label>
                    <br>
                    <input  type="text"  name="S_LastName" value="<?php echo $row['S_LastName']; ?>">
                </div>
                <br>
                <div class="text-center">
                    <label for="address"  style="color:MediumSeaGreen;">ที่อยู่</label>
                    <br>
                    <input  type="text" name="S_Address" value="<?php echo $row['S_Address']; ?>">
                </div>
                <br>
                <div class="text-center">
                    <label for="subjectname" class="form-label" style="color:MediumSeaGreen;">เบอร์โทรศัพท์</label>
                    <br>
                    <input  type="text" name="S_SunjectName" value="<?php echo $row['S_SunjectName']; ?>">
                </div>
                <br><br>
                <div class="text-center">
                    <input class="btn btn-success mt-3  mr-3 textC" type="submit" value="Update">
                    <a href="index_employee_product.php" class="btn btn-primary mt-3  mr-3 textC ">Go Back</a>
                </div>
            </div>            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>