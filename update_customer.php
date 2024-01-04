<?php
include 'condb.php';
$id=$_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="UPDATE user set cm_name='$name',cm_phone='$phone',password='$password',email='$email' WHERE cm_id='$id' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='customer.php';</script>";  
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);



?>