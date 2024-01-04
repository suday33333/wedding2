<?php
include 'condb.php';
$ids=$_GET['id'];
$sql="SELECT * FROM user WHERE cm_id='$ids' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>

<?php include 'condb.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <?php include 'menu.php'; ?>  
            <div id="layoutSidenav_content">
                <main>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-4">
            
    <div class= "h5 text-center alert alert-primary mb-4 mt-4 " role="alert"> เพิ่มข้อมูลพนักงาน </div>
    <form method="POST" action="update_customer.php">
    <label>รหัสสมาชิก:</label>
    <input type="text" name="id"  class="form-control" readonly value=<?=$row['cm_id']?> > <br> 
    <label>ชื่อ:</label>
    <input type="text" name="name"  class="form-control" value=<?=$row['cm_name']?> > <br>  
    <label>เบอร์โทรศัพท์:</label>
    <input type="text" name="phone"  class="form-control" value=<?=$row['cm_phone']?> > <br> 
    <label>password:</label>
    <input type="text" name="password"  class="form-control"maxlength="10" value=<?=$row['password']?> > <br> 
    <label>email:</label>
    <input type="text" name="email"  class="form-control" value=<?=$row['email']?> > <br> 
    <input type="submit" value="แก้ไข" class="btn btn-success"> 
    <a href="customer.php" class="btn btn-danger" >ยกเลิก</a>
</form>

</div>
</div>

</div>
</body>
</html>