
<?php
require_once('connections/mysqli.php');

session_start();

if ($_SESSION != NULL) {
  header("location:home.php");
  exit();
}

$check_submit = "";

if (isset($_POST["submit"])) {
  $strSQL = "SELECT * FROM user WHERE email = '" . trim($_POST['email']) . "'";
  $objQuery = mysqli_query($Connection, $strSQL);
  $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

  if ($objResult) {
    $check_submit = "อีเมลนี้ผู้อื่นใช้แล้ว กรอกอีเมลผู้ใช้ใหม่";
  } else {
    $strSQL = "INSERT INTO user (cm_phone, email,password,cm_name) VALUES ('" . $_POST["phone"] . "', '" . $_POST["email"] . "','" . md5($_POST["password"]) . "','" . $_POST["cm_name"] . "')";
    $objQuery = mysqli_query($Connection, $strSQL);

    header("location:login.php?register=success");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <title>Login V16</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
</head>

<body>

  <form  method="post"class="row g-3">
    <div class="col-12">
    <div class="limiter">
    <div class="container-login100" style="background-image: url('img/p1.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          สมัครสมาชิก
        </span>
        <form method="post" class="login100-form validate-form p-b-33 p-t-5">
        <div class="row g-3">
        <div class="col-sm-6">
      <label for="cm_name" class="form-label text-light ">ชื่อ-นามสกุล</label>
      <input type="text" name="cm_name" class="form-control" id="inputAddress2" placeholder="ชื่อ-นามสกุล">
    </div>
    <div class="col-sm-6">
      <label for="inputAddress" class="form-label text-light">เบอร์โทร</label>
      <input type="text" name="cm_phone" class="form-control" id="inputAddress" placeholder="เบอร์โทร">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label text-light">อีเมล</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="email">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label text-light">รหัสผ่าน</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="password">
    </div>

    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" name="submit" class="btn btn-primary">ยืนยัน</button>
    </div>
  </form>
    <div class="text-center">กดปุ่ม Home เพื่อย้อนกลับ<br>
            <a class="text-warning btn btn-link" href="home.php">Home</a>
          </div>
        </form>
  <?php echo $check_submit; ?>
  <?php mysqli_close($Connection); ?>
</body>

</html>