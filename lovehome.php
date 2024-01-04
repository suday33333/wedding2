<?php
require_once('connections/mysqli.php');

session_start();

if ($_SESSION != NULL) {
  $strSQL = "SELECT * FROM user WHERE email = '" . $_SESSION['email'] . "'";
  $objQuery = mysqli_query($Connection, $strSQL);
  $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
}
?>

<?php
if ($_SESSION != NULL) {
  if ($_SESSION['cm_level'] == "admin") {
?>
    <h1><a href="admin/index.php">ระบบหลังบ้าน</a></h>
  <?php
  }
}
  ?>


  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta name="twitter:image" content="img/4.jpg                                                                                                         " />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
      .card-bottom-margin {
        margin-top: 10px;
        margin-bottom: 10px;
      }
    </style>
  </head>

  <body>
    <!-- start navbar -->
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: #3e2723;">
            <a class="navbar-brand mx-2 text-warning" href="#">
              <h5>MN Photography & Pre-Wedding</h5>
            </a>
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-5 mb-lg-0 ">
                  <li class="nav-item">
                    <a class="nav-link active text-warning mx-2" aria-current="page" href="#">หน้าหลัก</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-warning" href="#">แพ็กเกจ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-warning" href="#">เครื่องประดับ</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-warning" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      ประเภทชุดแต่งงาน
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">ชุดสากล</a></li>
                      <li><a class="dropdown-item" href="#">ชุดไทย</a></li>
                      <li>
                        
                      </li>
                    </ul>
                  </li>
                </ul>
                <!-- ตะกร้า -->
                <a href="basket.php" class="btn btn-outline-danger text-warning mx-2"><i class="bi bi-cart4"></i><span class="badge bg-text-warning">5</span></a>

                <form class="d-flex me-5" role="search">
                  <input class="form-control me-2  text-warning" type="search" placeholder="ค้นหา" aria-label="Search">
                  <button class="btn btn-outline-success text-warning me-5" type="submit">ค้นหา</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- end navbar -->
    <!-- start banner -->
    <div class="container" style="margin-top: 60px;">
      <div class="row">
        <div class="col">
          <img src="img/p1.jpg" class="img-fluid">
        </div>
      </div>
    </div>

    <hr>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">
          <h3>ชุดทั้งหมด</h3>
        </a>
      </li>
    </ul>
    <hr>

    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-4 col-md-3 card-bottom-margin">
          <div class="card" style="width: 100%;">
            <img src="img/p2.jpg"                                                                                                         " class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">ชื่อชุด</h5>
              <p class="card-text">รายละเอียด</p>
              <a href="#" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ข้อมูลเพิ่มเติม</a>
              <a href="#" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3 card-bottom-margin">
          <div class="card" style="width: 100%;">
            <img src="img/p2.jpg"                                                                                                         " class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">ชื่อชุด</h5>
              <p class="card-text">รายละเอียด</p>
              <a href="#" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ข้อมูลเพิ่มเติม</a>
              <a href="#" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3 card-bottom-margin">
          <div class="card" style="width: 100%;">
            <img src="img/p2.jpg"                                                                                                         " class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">ชื่อชุด</h5>
              <p class="card-text">รายละเอียด</p>
              <a href="#" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ข้อมูลเพิ่มเติม</a>
              <a href="#" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3 card-bottom-margin">
          <div class="card" style="width: 100%;">
            <img src="img/p2.jpg"                                                                                                         " class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">ชื่อชุด</h5>
              <p class="card-text">รายละเอียด</p>
              <a href="#" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ข้อมูลเพิ่มเติม</a>
              <a href="#" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3 card-bottom-margin">
          <div class="card" style="width: 100%;">
            <img src="img/p3.jpg"                                                                                                         " class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">ชื่อชุด</h5>
              <p class="card-text">รายละเอียด</p>
              <a href="#" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ข้อมูลเพิ่มเติม</a>
              <a href="#" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3 card-bottom-margin">
          <div class="card" style="width: 100%;">
            <img src="img/p3.jpg"                                                                                                        " class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">ชื่อชุด</h5>
              <p class="card-text">รายละเอียด</p>
              <a href="#" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ข้อมูลเพิ่มเติม</a>
              <a href="#" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3 card-bottom-margin">
          <div class="card" style="width: 100%;">
            <img src="img/p3.jpg"                                                                                                        " class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">ชื่อชุด</h5>
              <p class="card-text">รายละเอียด</p>
              <a href="#" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ข้อมูลเพิ่มเติม</a>
              <a href="#" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-3 card-bottom-margin">
          <div class="card" style="width: 100%;">
            <img src="img/p3.jpg"                                                                                                         " class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">ชื่อชุด</h5>
              <p class="card-text">รายละเอียด</p>
              <a href="#" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ข้อมูลเพิ่มเติม</a>
              <a href="#" class="btn btn-outline-danger">เลือก</a>
            </div>
          </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">ข้อมูลเพิ่มเติม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <!-- รูปเเสดงใน modal -->
              <div class="container">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3 border bg-light">
                      <div class="card" style="width: 100%;">
                        <img src="img/4.jpg                                                                                                         " class="card-img-top" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border bg-light">
                      <div class="card" style="width: 100%;">
                        <img src="img/4.jpg                                                                                                         " class="card-img-top" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border bg-light">
                      <div class="card" style="width: 100%;">
                        <img src="img/4.jpg                                                                                                         " class="card-img-top" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border bg-light">
                      <div class="card" style="width: 100%;">
                        <img src="img/4.jpg                                                                                                         " class="card-img-top" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end alert info -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

  </html>
  <?php mysqli_close($Connection); ?>
  </body>

  </html>