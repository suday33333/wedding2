<?php include 'condb.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <i class="fa fa-align " aria-hidden="true"></i>
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
        <div class="d-flex justify-content-center">
        <div class="col-sm-4">
            
        <div class= "h5 text-center alert alert-primary mb-4 mt-4 " role="alert"> เพิ่มข้อมูลชุดแต่งงาน </div>
    <form method="POST" action="insert_wedding_dress.php">
    <label>ชื่อชุดแต่งงาน:</label>
    <input type="text" name="name_wedding"  class="form-control" placeholder="ชื่อ" required > <br>  
    <label>ราคาชุดแต่งงาน:</label>
    <input type="text" name="price_wedding"  class="form-control" placeholder="ราคา" required > <br>  
    <label>สีชุดแต่งงาน:</label>
    <input type="text" name="color_wedding"  class="form-control" placeholder="สี" required > <br> 
    <label>ไซส์ชุดแต่งงาน:</label>
    <input type="text" name="size_wedding"  class="form-control" placeholder="ไซส์" required > <br> 
    <label> รูปภาพ: </label>
            <input type="file" name="file1"require ><br>
            <button type="submit"class="btn btn-success" >บันทึก</button>
            <a href="show_camera.php"class="btn btn-danger"></button>ยกเลิก</a>
</form>

</div>
</div>
</div>

</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    
