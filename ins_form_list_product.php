
<html lang="en">
<head>
<style>

.colerA {
  border: 0px outset #080808 ;
  background-color: #343a40;  
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body class="colerA">
    
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5" style="color:MediumSeaGreen;">เพิ่มข้อมูล การขาย</h1>
        <hr>
        
<div class="mb-3">
<form  action="create_list_product.php" method="post">
            <div class="mb-3">
                <label for="S_Name" class="form-label" style="color:MediumSeaGreen;">รหัส สินค้า</label>
                <input type="text" class="form-control" name="S_Name" required>
            </div>
            <div class="mb-3">
                <label for="S_LastName" class="form-label" style="color:MediumSeaGreen;">รหัสพนักงาน</label>
                <input type="text" class="form-control" name="S_LastName" required>
            </div>
            <div class="mb-3">
                <label for="S_Address" style="color:MediumSeaGreen;">วันที่ขาย</label>
                <input type="S_Address" class="form-control" name="S_Address" required>
            </div>
            <div class="mb-3">
                <label for="S_SunjectName" style="color:MediumSeaGreen;" >ราคาขายรวมสุทธิ</label>
                <input type="text" class="form-control" name="S_SunjectName" required>
            </div>
            <button type="submit">Create</button>
            <a class="btn" href="index.php" style="color:MediumSeaGreen;">Back</a>
            </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>