<?php
include 'condb.php';
$ids=$_GET['id'];
$sql="SELECT * FROM type_dress WHERE id_dress ='$ids' ";
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
            
    <div class= "h5 text-center alert alert-primary mb-4 mt-4 " role="alert"> เพิ่มข้อมูลประเภทชุดแต่งงาน </div>
    <form method="POST" action="update_type_dress.php">
    <label>ชื่อประเภทชุดแต่งงาน:</label>
    <input type="text" name="name"  class="form-control"  value=<?=$row['name_dress']?> > <br>    
    <input type="submit" value="แก้ไข" class="btn btn-success"> 
    <a href="type_dress.php" class="btn btn-danger" >ยกเลิก</a>
</form>

</div>
</div>

</div>
</body>
</html>