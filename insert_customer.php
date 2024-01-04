<?php
include 'condb.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="INSERT INTO user (cm_name,cm_phone,password,email) 
VALUES('$name','$phone','$password','$email')";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='customer.php';</script>";  
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}
mysqli_close($conn);

?>