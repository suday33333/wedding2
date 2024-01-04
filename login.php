<?php
require_once('connections/mysqli.php');

session_start();

if ($_SESSION != NULL) {
  header("location:home.php");
  exit();
}

$check_submit = "";

if (isset($_POST["submit"])) {
  $strSQL = "SELECT * FROM user WHERE email = '" . mysqli_real_escape_string($Connection, $_POST['email']) . "' and password = '" . mysqli_real_escape_string($Connection, md5($_POST['password'])) . "'";
  $objQuery = mysqli_query($Connection, $strSQL);
  $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

  if (!$objResult) {
    $check_submit = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบใหม่อีกครั้ง";
  } else {
    $_SESSION["email"] = $objResult["email"];
    $_SESSION["cm_level"] = $objResult["cm_level"];

    if ($objResult["cm_level"] == "admin") {
      header("location:index.php");
      exit();
    } else {
      header("location:lovehome.php");
      exit();
    }
  }
}

if (isset($_GET["register"])) {
  $register = $_GET["register"];

  if ($register == "success") {
?>
    <script type="text/javascript">
      alert("สมัครสมาชิกสำเร็จแล้ว");
    </script>
<?php
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
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

  <div class="limiter">
    <div class="container-login100" style="background-image: url('img/p1.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          Login
        </span>
        <form method="post" class="login100-form validate-form p-b-33 p-t-5">

          <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="email" name="email" placeholder="email">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>
          <div class="wrap-input100 validate-input">
            <p><input class="input100" type="password" name="password" placeholder="password">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>
          <div class="container-login100-form-btn m-t-32">
            <p><input class="login100-form-btn" type="submit" name="submit" value="เข้าสู่ระบบ"></p>
          </div>

          <div class="text-center">กดปุ่ม Home เพื่อย้อนกลับ<br>
            <a class="text-warning btn btn-link" href="home.php">Home</a>
          </div>
        </form>

        <?php echo $check_submit; ?>

        <?php mysqli_close($Connection); ?>
      </div>
    </div>
  </div>


  <div id="dropDownSelect1"></div>

  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>

</html>