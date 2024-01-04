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
    <div class= "h5 text-center alert alert-primary mb-4 mt-4" role="alert">แสดงข้อมูลชุดประเภทแต่งงาน</div>
    <a href="add_type_dress.php" class="btn btn-success mb-4" >เพิ่มข้อมูลประเภทชุดแต่งงาน</a>
    <table class="table table-striped">
    <tr>
        <th>ชื่อประเภทชุด</th>
        <th>รหัสประเภทชุดแต่งงาน</th>
        <th>แก้ไขประเภทชุดแต่งงาน</th>
        <th>ลบประเภทชุดแต่งงาน</th>

    </tr>
<?php
    $sql = "SELECT  * FROM type_dress";
    $hand=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($hand)){
    ?>
        <tr>
            <td><?=$row["name_dress"]?></td>
            <td><?=$row["id_dress"]?></td>
            <td><a href="edit_type_dress.php?id=<?php echo $row['id_dress']; ?>" class="btn btn-warning">แก้ไข</a> </td>
            <td><a href="delete_type_dress.php?id=<?=$row["id_dress"]?>" class="btn btn-danger" onclick="Del(this.href);return false;" >ลบ</a> </td>
        </tr>

<?php
}
mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
?>
</table>
</div>    
</body>
</html>

<script language="JavaScript">
    function Del(mypage){
        var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
        if(agree){
            window.location=mypage;
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    
